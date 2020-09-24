<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Daruma extends Seeder
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
                [
                    'name' => 'Noodles', 
                    'price' => 2, 
                    'ingredients' => '', 
                    'type' => 'extras',
                    'image' => '14.jpg',
                    'restaurant_id' => 3,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Chashu', 
                    'price' => 4, 
                    'ingredients' => '', 
                    'type' => 'extras',
                    'image' => '13.jpeg',
                    'restaurant_id' => 3,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Egg', 
                    'price' => 2, 
                    'ingredients' => '', 
                    'type' => 'extras',
                    'image' => '12.jpeg',
                    'restaurant_id' => 3,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                // Tokotsu Ramen
                [
                    'name' => 'Chicken Tonkotsu', 
                    'price' => 13.80, 
                    'ingredients' => 'Chicken feet, Boneless pork belly, Ramen noodles', 
                    'type' => 'tonkotsu ramen',
                    'image' => '11.jpeg',
                    'restaurant_id' => 3,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Chashu Tonkotsu', 
                    'price' => 14.80, 
                    'ingredients' => 'Chicken feet, Boneless pork belly, Pig trotters enoki', 
                    'type' => 'tonkotsu ramen',
                    'image' => '10.jpeg',
                    'restaurant_id' => 3,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Mega Chashu', 
                    'price' => 19.80, 
                    'ingredients' => 'Pork Broth', 
                    'type' => 'tonkotsu ramen',
                    'image' => '9.jpeg',
                    'restaurant_id' => 3,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                // Chikend Donburi
                [
                    'name' => 'Chicken Katsu Donburi', 
                    'price' => 14.80, 
                    'ingredients' => 'Bonless chicken, Donburi', 
                    'type' => 'chicken donburi',
                    'image' => '8.jpeg',
                    'restaurant_id' => 3,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Teriyaki Chick Donburi', 
                    'price' => 12.80, 
                    'ingredients' => 'Stir fry sauce, Skinless chicken breast, Broccoli', 
                    'type' => 'chicken donburi',
                    'image' => '7.jpeg',
                    'restaurant_id' => 3,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Chicken Karaage Donburi', 
                    'price' => 12.80, 
                    'ingredients' => 'Bonless chicken, Brocoli', 
                    'type' => 'chicken donburi',
                    'image' => '6.jpeg',
                    'restaurant_id' => 3,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Yum yum spicy chicken donburi', 
                    'price' => 13.80, 
                    'ingredients' => '', 
                    'type' => 'chicken donburi',
                    'image' => '5.jpeg',
                    'restaurant_id' => 3,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                //Ramen
                [
                    'name' => 'Chicken Soy Ramen', 
                    'price' => 12.80, 
                    'ingredients' => 'Chicken broth', 
                    'type' => 'ramen',
                    'image' => '4.jpeg',
                    'restaurant_id' => 3,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Chicken Miso Ramen', 
                    'price' => 14.80, 
                    'ingredients' => 'Pork Broth', 
                    'type' => 'ramen',
                    'image' => '3.jpeg',
                    'restaurant_id' => 3,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                //Japanese Curry
                [
                    'name' => 'Chicken Katsu Curry', 
                    'price' => 17.80, 
                    'ingredients' => 'Chicken breast, Egg, Panko bread crumbs', 
                    'type' => 'japanese curry',
                    'image' => '2.jpg',
                    'restaurant_id' => 3,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Chicken Karaage curry', 
                    'price' => 14.80, 
                    'ingredients' => 'Boneless chicken', 
                    'type' => 'japanese curry',
                    'image' => '1.jpg',
                    'restaurant_id' => 3,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            ]
        );
    }
}
