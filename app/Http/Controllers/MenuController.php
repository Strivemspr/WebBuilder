<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use App\Menu;

class MenuController extends Controller
{
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
