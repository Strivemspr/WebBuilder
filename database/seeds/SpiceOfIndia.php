<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpiceOfIndia extends Seeder
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
                //Combo
                [
                    'name' => 'Any two curries', 
                    'price' => 11.99, 
                    'ingredients' => '', 
                    'type' => 'combos',
                    'restaurant_id' => 8,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Any three curies', 
                    'price' => 13.50, 
                    'ingredients' => '', 
                    'type' => 'combos',
                    'restaurant_id' => 8,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                //Drinks
                [
                    'name' => 'Gulabjamun', 
                    'price' => 3, 
                    'ingredients' => '', 
                    'type' => 'drinks',
                    'restaurant_id' => 8,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Samosa', 
                    'price' => 2.50, 
                    'ingredients' => '', 
                    'type' => 'drinks',
                    'restaurant_id' => 8,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Mango Lassi', 
                    'price' => 3.50, 
                    'ingredients' => '', 
                    'type' => 'drinks',
                    'restaurant_id' => 8,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                //Vegetarian
                [
                    'name' => 'Veg masala', 
                    'price' => 7.99, 
                    'ingredients' => '', 
                    'type' => 'vegeterian',
                    'restaurant_id' => 8,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Veg korma ', 
                    'price' => 7.99, 
                    'ingredients' => 'mix vegitables, cream', 
                    'type' => 'vegeterian',
                    'restaurant_id' => 8,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Chole bhature', 
                    'price' => 9.99, 
                    'ingredients' => 'white flour, cheackpeas', 
                    'type' => 'vegeterian',
                    'restaurant_id' => 8,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Daal makhani', 
                    'price' => 7.99, 
                    'ingredients' => 'black beans, kidney beans, butter, cream', 
                    'type' => 'vegeterian',
                    'restaurant_id' => 8,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                //Non Vegetarian
                [
                    'name' => 'Butter chicken', 
                    'price' => 8.99, 
                    'ingredients' => 'butter, cream, tomato sauce, boneless chicken', 
                    'type' => 'non vegetarian',
                    'restaurant_id' => 8,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Chicken tikka masala', 
                    'price' => 8.99, 
                    'ingredients' => 'boneless chicken, onion, capsicum, tomato puri, onion', 
                    'type' => 'non vegetarian',
                    'restaurant_id' => 8,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Chicken korma', 
                    'price' => 8.99, 
                    'ingredients' => 'boneless chicken, cream, cheshew nuts', 
                    'type' => 'non vegetarian',
                    'restaurant_id' => 8,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Lamb saagwala', 
                    'price' => 8.99, 
                    'ingredients' => 'spnich, boneless lamb, onion gravy', 
                    'type' => 'non vegetarian',
                    'restaurant_id' => 8,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            ]
        );
    }
}
