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
                $category->categories = "{$currentCategories},{$categories}";
                $category->restaurant_id = $restaurant_id;
                $category->save();
            }

            // print_r("{$categories}");

            return redirect('/dashboard/restaurant/'.$restaurant_id.'/edit')->with('success', 'Categories Have Been Updated Successfully');
        }

        // Request by the update menu categories form
        if($request['updateMenuCategories'] == 'updateMenuCategories'){
            $categories = $request->categoryUpdate;


            if($categories) {
                $categories = implode(',', array_filter($categories));
            } else {
                $categories = "";
            }

            $category = Category::find($category_id);
            $category->categories = $categories;
            $category->restaurant_id = $restaurant_id;
            $category->save();

            return redirect('/dashboard/restaurant/'.$restaurant_id.'/edit')->with('success', 'Categories Have Been Updated Successfully');
        }
    }

    // Menu Item Funcitons
    public function create(Request $request, $id) {
        print_r($request->dishName);

        // Store restaurant ID in variable
        $restaurant_id = $id;

        // Store Values
        $dishName = $request->dishName;
        $dishPrice = $request->dishPrice;
        $dishIngredients = $request->dishIngredients;
        $dishType = $request->dishType;

        print_r($dishType);

        // Loop Throuhg Values
        // $data = [];

        // for ($count=0; $count < count($dishName); $count++) { 
        //     $dish = array(
        //         'name' => $dishName[$count],
        //         'price' => $dishPrice[$count],
        //         'ingredients' => $dishIngredients[$count],
        //         'type' => $dishType[$count],
        //         'restaurant_id' => $restaurant_id,
        //         'created_at' => date('Y-m-d H:i:s'),
        //         'updated_at' => date('Y-m-d H:i:s'),
        //     );
        //     $data[] = $dish;
        // }

        // Insert Data
        // DB::table('menus')->insert($data);
        // Menu::insert($data);

        // Redirect
        // return redirect('/dashboard/restaurant/'.$restaurant_id.'/edit')->with('success', 'Restaurant Items Have Been Added Successfully');
    }

    public function update(Request $request, $id, $menu_id) {
        $restaurant_id = $id;
        $menu = Menu::find($menu_id);

        $menu->name = $request->input('dishName');
        $menu->price = $request->input('dishPrice');
        $menu->ingredients = $request->input('dishIngredients');
        $menu->type = $request->input('dishType');
        $menu->restaurant_id = $restaurant_id;

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
