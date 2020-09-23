<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Restaurant;
use App\Menu;
use App\Category;

class MenuController extends Controller
{
    // Category Functions
    public function createCategory(Request $request, $id) {
        $categories = $request->category;

        $restaurant_id = $id;

        $categories = implode(',', array_filter($categories));

        $category = new Category;
        $category->categories = $categories;
        $category->restaurant_id = $restaurant_id;
        $category->save();

        return redirect('/dashboard/restaurant/'.$restaurant_id.'/edit')->with('success', 'Categories Have Been Created Successfully');
    }

    public function updateCategory(Request $request, $id, $category_id) {

        $restaurant_id = $id;

        // Request by the update and add menu categories form
        if($request['updateAddMenuCategories'] == 'updateAddMenuCategories'){
            $categories = $request->category; // 

            if($categories) {
                $categories = implode(',', array_filter($categories));
            } else {
                $categories = "";
            }

            if(!empty($categories)) {
                $category = Category::find($category_id);
                $currentCategories = $category->categories;
                if(empty($currentCategories)) {
                    $category->categories = strtolower($categories);
                } else {
                    $category->categories = "{$currentCategories},{$categories}";
                }
                $category->restaurant_id = $restaurant_id;
                $category->save();
            }

            // print_r("{$categories}");

            return redirect('/dashboard/restaurant/'.$restaurant_id.'/edit')->with('success', 'Categories Have Been Updated Successfully');
        }

        // Request by the update menu categories form
        if($request['updateMenuCategories'] == 'updateMenuCategories'){
            // categories displayed in the front-end
            $categories = $request->categoryUpdate;

            // categories stored in the database
            $category = Category::find($category_id);
            $menu_categories = $category->categories;

            // create array with all restaurant types
            $restaurant = Restaurant::find($restaurant_id);
            $restaurant_type = $restaurant->menu;
            $menu_items = [];
            
            foreach ($restaurant_type as $key => $value) {
                $menu_items[] = $value->type;
            }

            // check if there are categories in the request and then clean the categories otherwise store a empty string
            if($categories) {
                $categories = implode(',', array_filter($categories));
            } else {
                $categories = "";
            }

            // check if the categories from front equal to the ones in the database otherwise send error message
            if($categories != $menu_categories) {
                return redirect('/dashboard/restaurant/'.$restaurant_id.'/edit')->with('error', 'Press Delete To Delete Categories');
            }

            // delete categories not in use
            $menu_categories = explode(',',$menu_categories);

            print_r($menu_categories);
            print_r($menu_items);

            foreach ($menu_categories as $menu_key => $menu_category) {
                if(!(in_array($menu_category, $menu_items, true))) {
                    unset($menu_categories[$menu_key]);
                }
            }

            // make the new arrays category
            $new_categories = implode(',',array_values($menu_categories));

            // print_r($new_categories);

            // If all categories are in use
            if($categories == $new_categories) {
                return redirect('/dashboard/restaurant/'.$restaurant_id.'/edit')->with('error', 'No Categories Were Deleted, All Categories Are Being Used');
            }

            // saves new array of strings
            $category->categories = strtolower($new_categories);
            $category->restaurant_id = $restaurant_id;
            $category->save();

            // return a message with success
            return redirect('/dashboard/restaurant/'.$restaurant_id.'/edit')->with('success', 'Categories Have Been Deleted Successfully');
        }

        // Request by the update menu categories form
        // if($request['updateMenuCategories'] == 'updateMenuCategories'){
        //     $categories = $request->categoryUpdate;


        //     if($categories) {
        //         $categories = implode(',', array_filter($categories));
        //     } else {
        //         $categories = "";
        //     }

        //     $category = Category::find($category_id);
        //     $category->categories = strtolower($categories);
        //     $category->restaurant_id = $restaurant_id;
        //     $category->save();

        //     return redirect('/dashboard/restaurant/'.$restaurant_id.'/edit')->with('success', 'Categories Have Been Updated Successfully');
        // }
    }

    // Menu Item Funcitons
    public function create(Request $request, $id) {
        $this->validate($request, [
            'dishName.*' => 'required',
            'dishType.*' => 'required',
        ], [
            ':attribute The dish name is required',
            ':attribute The dish type is required'
        ]);

        // Store restaurant ID in variable
        $restaurant_id = $id;

        // Store Values
        $dishName = $request->dishName;
        $dishPrice = $request->dishPrice;
        $dishIngredients = $request->dishIngredients;
        $dishType = $request->dishType;
        $dishImage = $request->file('dishImage');


        // print_r(dd($request->hasFile('dishImage')));
        // print_r(dd($dishImage[0]->getClientOriginalName()));


        // Loop Throuhg Values
        $data = [];

        for ($count=0; $count < count($dishName); $count++) {
            if($request->hasFile('dishImage')) {
                $file = $dishImage[$count];
                $extension = $file->getClientOriginalExtension();
                $name = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                $filename = $name . "-" . time() . $count . '.' . $extension;
                $file->move('img/menuImages/', $filename);
                $image = $filename;
            } else {
                $image = '';
            }

            $dish = array(
                'name' => $dishName[$count],
                'price' => $dishPrice[$count],
                'ingredients' => $dishIngredients[$count],
                'type' => $dishType[$count],
                'image' => $image,
                'restaurant_id' => $restaurant_id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            );
            $data[] = $dish;
        }

        

        // Insert Data
        DB::table('menus')->insert($data);
        // Menu::insert($data);

        // Redirect
        return redirect('/dashboard/restaurant/'.$restaurant_id.'/edit')->with('success', 'Restaurant Items Have Been Added Successfully');
    }

    public function update(Request $request, $id, $menu_id) {
        $restaurant_id = $id;
        $menu = Menu::find($menu_id);

        $menu->name = $request->input('dishName');
        $menu->price = $request->input('dishPrice');
        $menu->ingredients = $request->input('dishIngredients');
        $menu->type = $request->input('dishType');
        $menu->restaurant_id = $restaurant_id;

        if($request->hasFile('dishImage')) {
            $file = $request->file('dishImage');
            $extension = $file->getClientOriginalExtension();
            $name = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $filename = $name . "-" . time() . '.' . $extension; //TODO: implement a better unique id for each image 
            $file->move('img/menuImages/', $filename);
            $menu->image = $filename;
        } //16006711781

        // print_r($filename);

        $menu->save();

        return redirect('/dashboard/restaurant/'.$restaurant_id.'/edit')->with('success', 'Restaurant Item '.$menu_id.' Has Been Updated Successfully');
    }

    public function delete(Request $request, $id, $menu_id) {

        $restaurant_id = $id;
        $menu = Menu::find($menu_id);
        $menu->delete();

        return redirect('/dashboard/restaurant/'.$restaurant_id.'/edit')->with('success', 'Restaurant Item '.$menu_id.' Has Been Deleted Successfully');
    }
}
