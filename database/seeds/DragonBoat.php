<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DragonBoat extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert(
            [
                // Fried Dim Sim
                [
                    'name' => 'Spicy salt prawns', 
                    'price' => 13.50, 
                    'ingredients' => 'prawns, lemon, plain flour, sea salt deep frying', 
                    'type' => 'fried dim sum',
                    'image' => '10.jpeg',
                    'restaurant_id' => 4,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Roasted duck', 
                    'price' => 13.50, 
                    'ingredients' => 'long island duck, hot water, black papper', 
                    'type' => 'fried dim sum',
                    'image' => '9.jpeg',
                    'restaurant_id' => 4,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'deep fried calamari', 
                    'price' => 7.50, 
                    'ingredients' => 'calamari, marinara sauce, lemon, buttermilk', 
                    'type' => 'fried dim sum',
                    'image' => '8.jpeg',
                    'restaurant_id' => 4,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                //Desserts
                [
                    'name' => 'Coconut cake', 
                    'price' => 4, 
                    'ingredients' => 'Cream cheese, canned coconut milk,sour cream', 
                    'type' => 'desserts',
                    'image' => '7.jpeg',
                    'restaurant_id' => 4,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Sesame ball', 
                    'price' => 4.50, 
                    'ingredients' => 'Red bean, glutinous rice flour, brown sugar, seame seed', 
                    'type' => 'desserts',
                    'image' => '6.jpeg',
                    'restaurant_id' => 4,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                // Steamed dim sum
                [
                    'name' => 'Prawn dumpling', 
                    'price' => 1.50, 
                    'ingredients' => 'oyster sauce, gow gee wrappers king prawns', 
                    'type' => 'steamed dim sum',
                    'image' => '5.jpeg',
                    'restaurant_id' => 4,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Prawn & coriander dumpling', 
                    'price' => 5.80, 
                    'ingredients' => 'dipping sauce, ginger, garlic. sea salt, dumpling wrapper', 
                    'type' => 'steamed dim sum',
                    'image' => '4.jpeg',
                    'restaurant_id' => 4,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Steamed tripe', 
                    'price' => 5.80, 
                    'ingredients' => 'beef tripe, dark soy sauce, brown sugar, star amise', 
                    'type' => 'steamed dim sum',
                    'image' => '3.jpeg',
                    'restaurant_id' => 4,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                //Conge
                [
                    'name' => 'Dried fish congee', 
                    'price' => 5, 
                    'ingredients' => 'green beans, thai jaismaine rice, soy sauce', 
                    'type' => 'congee',
                    'image' => '2.jpg',
                    'restaurant_id' => 4,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Seafood congee', 
                    'price' => 6.50, 
                    'ingredients' => 'blue crabs, frozen white rice, ginger, shaxing wine', 
                    'type' => 'congee',
                    'image' => '1.jpg',
                    'restaurant_id' => 4,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            ]
        );
    }
}
