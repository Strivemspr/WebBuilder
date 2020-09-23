<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PepperKitchen extends Seeder
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
                // Dishes
                [
                    'name' => 'Black peeper', 
                    'price' => 12.50, 
                    'ingredients' => '', 
                    'type' => 'dishes',
                    'image' => '1.jpg',
                    'restaurant_id' => 7,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Black pepper chicken, Rice', 
                    'price' => 12.50, 
                    'ingredients' => '', 
                    'type' => 'dishes',
                    'image' => '2.jpg',
                    'restaurant_id' => 7,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'BBQ beef, Deep fried chicken, Rice', 
                    'price' => 13, 
                    'ingredients' => '', 
                    'type' => 'dishes',
                    'image' => '3.jpeg',
                    'restaurant_id' => 7,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Basa fish, Chicken, Rice', 
                    'price' => 13, 
                    'ingredients' => '', 
                    'type' => 'dishes',
                    'image' => '4.jpeg',
                    'restaurant_id' => 7,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Classic curry, Deep fried chicken, Rice', 
                    'price' => 13, 
                    'ingredients' => '', 
                    'type' => 'dishes',
                    'image' => '5.jpeg',
                    'restaurant_id' => 7,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Creamy seafood spaghetti', 
                    'price' => 13, 
                    'ingredients' => '', 
                    'type' => 'dishes',
                    'image' => '6.jpeg',
                    'restaurant_id' => 7,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Chilli fish, Preserved vegetable, Rice', 
                    'price' => 13, 
                    'ingredients' => '', 
                    'type' => 'dishes',
                    'image' => '7.jpeg',
                    'restaurant_id' => 7,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Black pepper, Lamb, Rice', 
                    'price' => 12.50, 
                    'ingredients' => '', 
                    'type' => 'dishes',
                    'image' => '8.jpeg',
                    'restaurant_id' => 7,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Chilli Beef, Rice', 
                    'price' => 12.50, 
                    'ingredients' => '', 
                    'type' => 'dishes',
                    'image' => '9.jpeg',
                    'restaurant_id' => 7,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Kimchi Beef, Rice', 
                    'price' => 13.50, 
                    'ingredients' => '', 
                    'type' => 'dishes',
                    'image' => '10.jpeg',
                    'restaurant_id' => 7,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'BBQ beef,Fried egg, Rice', 
                    'price' => 13.50, 
                    'ingredients' => '', 
                    'type' => 'dishes',
                    'image' => '11.jpeg',
                    'restaurant_id' => 7,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Teriyaki chicken, Fried egg, Rice', 
                    'price' => 13, 
                    'ingredients' => '', 
                    'type' => 'dishes',
                    'image' => '12.jpeg',
                    'restaurant_id' => 7,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Basa fish, Rice', 
                    'price' => 12, 
                    'ingredients' => '', 
                    'type' => 'dishes',
                    'image' => '13.jpeg',
                    'restaurant_id' => 7,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Chicken curry, Cheese, Rice', 
                    'price' => 13, 
                    'ingredients' => '', 
                    'type' => 'dishes',
                    'image' => '14.jpg',
                    'restaurant_id' => 7,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Beef curry, Cheese, Rice', 
                    'price' => 13, 
                    'ingredients' => '', 
                    'type' => 'dishes',
                    'image' => '15.jpeg',
                    'restaurant_id' => 7,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Seafood curry, Rice', 
                    'price' => 12.50, 
                    'ingredients' => '', 
                    'type' => 'dishes',
                    'image' => '16.jpeg',
                    'restaurant_id' => 7,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Black pepper, Beef, Speghtti', 
                    'price' => 12.50, 
                    'ingredients' => '', 
                    'type' => 'dishes',
                    'image' => '17.jpeg',
                    'restaurant_id' => 7,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Creamy bacon spaghetti', 
                    'price' => 12.50, 
                    'ingredients' => '', 
                    'type' => 'dishes',
                    'image' => '1.jpg',
                    'restaurant_id' => 7,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Mince pork, Tomato sauce, Spaghetti', 
                    'price' => 12.50, 
                    'ingredients' => '', 
                    'type' => 'dishes',
                    'image' => '2.jpg',
                    'restaurant_id' => 7,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Snowflak', 
                    'price' => 25, 
                    'ingredients' => '', 
                    'type' => 'dishes',
                    'image' => '3.jpeg',
                    'restaurant_id' => 7,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Black pepper steak', 
                    'price' => 16.50, 
                    'ingredients' => '', 
                    'type' => 'dishes',
                    'image' => '4.jpeg',
                    'restaurant_id' => 7,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Japenese tofu', 
                    'price' => 12.90, 
                    'ingredients' => 'Spicy chicken', 
                    'type' => 'dishes',
                    'image' => '5.jpeg',
                    'restaurant_id' => 7,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Spicy chicken', 
                    'price' => 12.90, 
                    'ingredients' => '', 
                    'type' => 'dishes',
                    'image' => '6.jpeg',
                    'restaurant_id' => 7,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Spicy squid', 
                    'price' => 12.90, 
                    'ingredients' => '', 
                    'type' => 'dishes',
                    'image' => '7.jpeg',
                    'restaurant_id' => 7,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            ]
        );
    }
}
