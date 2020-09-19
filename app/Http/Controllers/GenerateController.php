<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Menu;
use App\Restaurant;
use App\OpeningHours;
use App\SocialMedia;

class GenerateController extends Controller
{
    //
    public function index($id, $theme) {

        // public $types = array('Common', 'Chinese', 'Japanese', 'Vietnamese', 'Korean', 'Cafe', 'Indian', 'Thai', 'Indonesian');

        // Store Variables
        $restaurant_id = $id;
        $restaurant_theme = 'common'; // strtolower() add to this value
        
        // Find Menu and Restaurant based on the restaurant id
        $menus = Menu::where('restaurant_id', $restaurant_id)->get();
        $restaurant = Restaurant::find($restaurant_id);
        // $menus = DB::table('menus')->where('restaurant_id', $restaurant_id)->get();
        //$menus = DB::table('users')->where('votes', '=', 100)->get();

        // Store types into an array
        $types = [];
        foreach ($menus as $key => $value) {
            if(!in_array($value->type, $types)) {
                $types[] = $value->type;
            }
        } 

        // Create view string based on the restaurant theme
        $string = 'themes.'.($restaurant_theme).'.'.($restaurant_theme);

        // Return view with menus restaurant and types data
        return view($string, compact('menus', 'restaurant', 'types'));
    }
}
