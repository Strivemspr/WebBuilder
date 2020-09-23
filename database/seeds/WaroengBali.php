<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WaroengBali extends Seeder
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
                //soups
                [
                    'name' => 'Gulai Kambing', 
                    'price' => 14, 
                    'ingredients' => '', 
                    'type' => 'soups',
                    'image' => '1.jpg',
                    'restaurant_id' => 12,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Kario Ikan', 
                    'price' => 14, 
                    'ingredients' => '', 
                    'type' => 'soups',
                    'image' => '2.jpg',
                    'restaurant_id' => 12,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Curry Noodle Soup', 
                    'price' => 14, 
                    'ingredients' => '', 
                    'type' => 'soups',
                    'image' => '3.jpeg',
                    'restaurant_id' => 12,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Chicken noodle', 
                    'price' => 14, 
                    'ingredients' => '', 
                    'type' => 'soups',
                    'image' => '4.jpeg',
                    'restaurant_id' => 12,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Soto Betawi', 
                    'price' => 14, 
                    'ingredients' => '', 
                    'type' => 'soups',
                    'image' => '5.jpeg',
                    'restaurant_id' => 12,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Surabaya', 
                    'price' => 13, 
                    'ingredients' => '', 
                    'type' => 'soups',
                    'image' => '6.jpeg',
                    'restaurant_id' => 12,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                //skewers
                [
                    'name' => 'Bakmi Goreng', 
                    'price' => 13, 
                    'ingredients' => '', 
                    'type' => 'skewers',
                    'image' => '7.jpeg',
                    'restaurant_id' => 12,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Gado Gado', 
                    'price' => 13, 
                    'ingredients' => '', 
                    'type' => 'skewers',
                    'image' => '8.jpeg',
                    'restaurant_id' => 12,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Masi Georang', 
                    'price' => 13, 
                    'ingredients' => '', 
                    'type' => 'skewers',
                    'image' => '9.jpeg',
                    'restaurant_id' => 12,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Corn Fritters', 
                    'price' => 8, 
                    'ingredients' => '', 
                    'type' => 'skewers',
                    'image' => '10.jpeg',
                    'restaurant_id' => 12,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                //dish
                [
                    'name' => 'Beef Balado ', 
                    'price' => 14, 
                    'ingredients' => '', 
                    'type' => 'dishes',
                    'image' => '11.jpeg',
                    'restaurant_id' => 12,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Rendang Padang', 
                    'price' => 14, 
                    'ingredients' => '', 
                    'type' => 'dishes',
                    'image' => '12.jpeg',
                    'restaurant_id' => 12,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Masi Padang', 
                    'price' => 15, 
                    'ingredients' => '', 
                    'type' => 'dishes',
                    'image' => '13.jpeg',
                    'restaurant_id' => 12,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Ayam Bakar Bambu Rujak', 
                    'price' => 15, 
                    'ingredients' => '', 
                    'type' => 'dishes',
                    'image' => '14.jpg',
                    'restaurant_id' => 12,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Ayam Bakar Bali', 
                    'price' => 14, 
                    'ingredients' => '', 
                    'type' => 'dishes',
                    'image' => '15.jpeg',
                    'restaurant_id' => 12,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Ayam Penut', 
                    'price' => 14, 
                    'ingredients' => '', 
                    'type' => 'dishes',
                    'image' => '16.jpeg',
                    'restaurant_id' => 12,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Oseng Oseng', 
                    'price' => 13, 
                    'ingredients' => '', 
                    'type' => 'dishes',
                    'image' => '17.jpeg',
                    'restaurant_id' => 12,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Oseng Bali', 
                    'price' => 13, 
                    'ingredients' => '', 
                    'type' => 'dishes',
                    'image' => '1.jpg',
                    'restaurant_id' => 12,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            ]
        );
    }
}
