<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
use App\Restaurant;
use App\OpeningHours;
use App\Category;
use App\SocialMedia;
use App\User;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Types

    public $types = array('Chinese', 'Japanese', 'Vietnamese', 'Korean', 'Cafe', 'Indian', 'Thai', 'Indonesian');
    public $times = array('am', 'pm');

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $types = $this->types;
        return view('dashboard.dashboard', compact('types'));
    }

    /**
     * Show the application restaurant details.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function restaurant()
    {
        $restaurants = Restaurant::orderBy('created_at','desc')->get();
        return view('dashboard.restaurant')->with('restaurants', $restaurants);
    }

    /**
     * Show the application restaurant to edit details.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit(Request $request, $id)
    {
        $types = $this->types;
        $times = $this->times;
        $restaurant = Restaurant::find($id);
        return view('dashboard.edit', compact('types', 'times', 'restaurant'));
    }

    /**
     * Show the application social media.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function user()
    {
        return view('dashboard.user');
    }

    /**
     * Store the application restaurant details.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'street_address' => 'required',
            'city' => 'required',
            'suburb' => 'required',
            'country' => 'required',
            'zip_code' => 'required',
            'description' => 'required',
            'type' => 'required',
        ]);

        // Create Restaurant

        $restaurant = new Restaurant;

        $restaurant->name = $request->input('name');
        $restaurant->phone = $request->input('phone');
        $restaurant->email = $request->input('email');
        $restaurant->street_address = $request->input('street_address');
        $restaurant->city = $request->input('city');
        $restaurant->suburb = $request->input('suburb');
        $restaurant->country = $request->input('country');
        $restaurant->zip_code = $request->input('zip_code');
        $restaurant->description =  $request->input('description');
        $restaurant->type =  $request->input('type');
        $restaurant->user_id = auth()->user()->id;

        $restaurant->save();
        
        return redirect('/dashboard/restaurant')->with('success', 'Restaurant Has Been Created');

        // ucfirst(trans())
    }

    public function destroy(Request $request, $id)
    {
        $restaurant = Restaurant::find($id);
        $restaurant->delete();
        return redirect('/dashboard/restaurant')->with('success', 'Restaurant Has Been Deleted');
    }

    public function userUpdate(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
        ]);

        $user = User::find($id);
        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->email = $request->input('email');
        $user->save();
        return redirect('/dashboard/user')->with('success', 'User Details Have Been Updated Successfully');
    }

    public function storeRestaurantDetails(Request $request, $id)
    {
        $restaurant_id = $id;

        if($request['openingHoursForm'] == 'openingHoursForm'){
            return $this->createOpeningHours($restaurant_id, $request);
        } 

        if($request['socialMediaForm'] == 'socialMediaForm'){
            return $this->createSocialMedia($restaurant_id, $request);
        }
    }

    public function update(Request $request, $id)
    {
        //Store resturant id in variable
        $restaurant_id = $id;

        // Find restaurant with id from the parameter from the route
        $restaurant = Restaurant::find($id);

        if($request['restaurantDetailsForm'] == 'restaurantDetailsForm'){
            return $this->updateRestaurantDetails($restaurant_id, $restaurant, $request);
        }

        if($request['openingHoursForm'] == 'openingHoursForm'){
            return $this->updateOpeningHours($restaurant, $restaurant_id, $request);
        }
        
        if($request['socialMediaForm'] == 'socialMediaForm'){
           return $this->updateSocialMedia($restaurant, $restaurant_id, $request);
        }
    }

    // Functions For Forms

    // Restaurant Details
    // public function createRestaurantDetails() {}
    public function updateRestaurantDetails($restaurant_id, $restaurant, Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'street_address' => 'required',
            'city' => 'required',
            'suburb' => 'required',
            'country' => 'required',
            'zip_code' => 'required',
            'description' => 'required',
            'type' => 'required',
        ]);

        // Create Restaurant
        $restaurant->name = $request->input('name');
        $restaurant->phone = $request->input('phone');
        $restaurant->email = $request->input('email');
        $restaurant->street_address = $request->input('street_address');
        $restaurant->city = $request->input('city');
        $restaurant->suburb = $request->input('suburb');
        $restaurant->country = $request->input('country');
        $restaurant->zip_code = $request->input('zip_code');
        $restaurant->description =  $request->input('description');
        $restaurant->type =  $request->input('type');
        $restaurant->user_id = auth()->user()->id;

        $restaurant->save();
        
        return redirect('/dashboard/restaurant/'.$restaurant_id.'/edit')->with('success', 'Restaurant Details Have Been Updated Successfully');
    }

    // Opening Hours
    public function createOpeningHours($restaurant_id, Request $request) {
        //Create new Opening Hours Table Field
        $openingHours = new OpeningHours;

        $openingHours->day_of_the_week1 = $request->input('day1');
        $openingHours->start_time1 = $request->input('startTime1');
        $openingHours->s_time1 = $request->input('sTime1');
        $openingHours->end_time1 = $request->input('endTime1');
        $openingHours->e_time1 = $request->input('eTime1');

        $openingHours->day_of_the_week2 = $request->input('day2');
        $openingHours->start_time2 = $request->input('startTime2');
        $openingHours->s_time2 = $request->input('sTime2');
        $openingHours->end_time2 = $request->input('endTime2');
        $openingHours->e_time2 = $request->input('eTime2');

        $openingHours->day_of_the_week3 = $request->input('day3');
        $openingHours->start_time3 = $request->input('startTime3');
        $openingHours->s_time3 = $request->input('sTime3');
        $openingHours->end_time3 = $request->input('endTime3');
        $openingHours->e_time3 = $request->input('eTime3');

        $openingHours->day_of_the_week4 = $request->input('day4');
        $openingHours->start_time4 = $request->input('startTime4');
        $openingHours->s_time4 = $request->input('sTime4');
        $openingHours->end_time4 = $request->input('endTime4');
        $openingHours->e_time4 = $request->input('eTime4');

        $openingHours->day_of_the_week5 = $request->input('day5');
        $openingHours->start_time5 = $request->input('startTime5');
        $openingHours->s_time5 = $request->input('sTime5');
        $openingHours->end_time5 = $request->input('endTime5');
        $openingHours->e_time5 = $request->input('eTime5');

        $openingHours->day_of_the_week6 = $request->input('day6');
        $openingHours->start_time6 = $request->input('startTime6');
        $openingHours->s_time6 = $request->input('sTime6');
        $openingHours->end_time6 = $request->input('endTime6');
        $openingHours->e_time6 = $request->input('eTime6');

        $openingHours->day_of_the_week7 = $request->input('day7');
        $openingHours->start_time7 = $request->input('startTime7');
        $openingHours->s_time7 = $request->input('sTime7');
        $openingHours->end_time7 = $request->input('endTime7');
        $openingHours->e_time7 = $request->input('eTime7');

        $openingHours->restaurant_id = $restaurant_id;
        $openingHours->save();

        // Redirect with success
        return redirect('/dashboard/restaurant/'.$restaurant_id.'/edit')->with('success', 'Restaurant Opening Hours Have Been Created Successfully');
    }

    public function updateOpeningHours($restaurant, $restaurant_id, Request $request) {
        // From the restaurant we have access to the id of the opening hours table which belongs to that restaurant
        $openingHours_id = $restaurant->openingHours->id;

        // Find the Opening hour specific table with the openingHours_id
        $openingHours = OpeningHours::find($openingHours_id); 

        // Update opening Hours Table table
        $openingHours->day_of_the_week1 = $request->input('day1');
        $openingHours->start_time1 = $request->input('startTime1');
        $openingHours->s_time1 = $request->input('sTime1');
        $openingHours->end_time1 = $request->input('endTime1');
        $openingHours->e_time1 = $request->input('eTime1');

        $openingHours->day_of_the_week2 = $request->input('day2');
        $openingHours->start_time2 = $request->input('startTime2');
        $openingHours->s_time2 = $request->input('sTime2');
        $openingHours->end_time2 = $request->input('endTime2');
        $openingHours->e_time2 = $request->input('eTime2');

        $openingHours->day_of_the_week3 = $request->input('day3');
        $openingHours->start_time3 = $request->input('startTime3');
        $openingHours->s_time3 = $request->input('sTime3');
        $openingHours->end_time3 = $request->input('endTime3');
        $openingHours->e_time3 = $request->input('eTime3');

        $openingHours->day_of_the_week4 = $request->input('day4');
        $openingHours->start_time4 = $request->input('startTime4');
        $openingHours->s_time4 = $request->input('sTime4');
        $openingHours->end_time4 = $request->input('endTime4');
        $openingHours->e_time4 = $request->input('eTime4');

        $openingHours->day_of_the_week5 = $request->input('day5');
        $openingHours->start_time5 = $request->input('startTime5');
        $openingHours->s_time5 = $request->input('sTime5');
        $openingHours->end_time5 = $request->input('endTime5');
        $openingHours->e_time5 = $request->input('eTime5');

        $openingHours->day_of_the_week6 = $request->input('day6');
        $openingHours->start_time6 = $request->input('startTime6');
        $openingHours->s_time6 = $request->input('sTime6');
        $openingHours->end_time6 = $request->input('endTime6');
        $openingHours->e_time6 = $request->input('eTime6');

        $openingHours->day_of_the_week7 = $request->input('day7');
        $openingHours->start_time7 = $request->input('startTime7');
        $openingHours->s_time7 = $request->input('sTime7');
        $openingHours->end_time7 = $request->input('endTime7');
        $openingHours->e_time7 = $request->input('eTime7');

        $openingHours->restaurant_id = $restaurant_id;
        $openingHours->save();

        return redirect('/dashboard/restaurant/'.$restaurant_id.'/edit')->with('success', 'Restaurant Opening Hours Have Been Updated Successfully');
    }

    //Social Media
    public function createSocialMedia($restaurant_id, Request $request) {
        //Create new Social Media Table Field
        $socialMedia = new SocialMedia;

        $socialMedia->facebook = $request->input('facebook');
        $socialMedia->instagram = $request->input('instagram');
        $socialMedia->twitter = $request->input('twitter');
        $socialMedia->restaurant_id = $restaurant_id;

        $socialMedia->save();

        // Redirect with success
        return redirect('/dashboard/restaurant/'.$restaurant_id.'/edit')->with('success', 'Restaurant Social Media Has Been Created Successfully');
    }

    public function updateSocialMedia($restaurant, $restaurant_id, Request $request) {
        // From the restaurant we have access to the id of the social media table which belongs to that restaurant
        $socialMedia_id = $restaurant->socialMedia->id;
    
        // Find the Opening hour specific table with the openingHours_id
        $socialMedia = SocialMedia::find($socialMedia_id);

        // Update Social Media Table
        $socialMedia->facebook = $request->input('facebook');
        $socialMedia->instagram = $request->input('instagram');
        $socialMedia->twitter = $request->input('twitter');

        $socialMedia->restaurant_id = $restaurant_id;
        $socialMedia->save();

        return redirect('/dashboard/restaurant/'.$restaurant_id.'/edit')->with('success', 'Restaurant Social Media Has Been Updated Successfully');
    }

    //Menu
    // public function createMenu() {}
    // public function updateMenu() {}
}
