<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MasterChef extends Seeder
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
                // Noodles With Soup
                [
                    'name' => 'Noodle with beef', 
                    'price' => 12.50, 
                    'ingredients' => '', 
                    'type' => 'noodles with soup',
                    'restaurant_id' => 6,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Homemade noodle soup with prawns fish & squid', 
                    'price' => 12, 
                    'ingredients' => '', 
                    'type' => 'noodles with soup',
                    'restaurant_id' => 6,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Shredded chicken in spicy noodle soup', 
                    'price' => 10.50, 
                    'ingredients' => '', 
                    'type' => 'noodles with soup',
                    'restaurant_id' => 6,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Chicken giblets in spicy noodle soup', 
                    'price' => 10.50, 
                    'ingredients' => '', 
                    'type' => 'noodles with soup',
                    'restaurant_id' => 6,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Handmade noodles with lamb soup', 
                    'price' => 11.50, 
                    'ingredients' => '', 
                    'type' => 'noodles with soup',
                    'restaurant_id' => 6,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Cold soba noodles', 
                    'price' => 11.50, 
                    'ingredients' => '', 
                    'type' => 'noodles with soup',
                    'restaurant_id' => 6,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Vegeterian Dish', 
                    'price' => 11.50, 
                    'ingredients' => '', 
                    'type' => 'noodles with soup',
                    'restaurant_id' => 6,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'MaLaTang ', 
                    'price' => 11.50, 
                    'ingredients' => '', 
                    'type' => 'noodles with soup',
                    'restaurant_id' => 6,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                // Noodles without soup
                [
                    'name' => 'Noodle with prok & diced eggplant sauce', 
                    'price' => 0, 
                    'ingredients' => '', 
                    'type' => 'noodles without soup',
                    'restaurant_id' => 6,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Noodles with Beijing style soy bean paste', 
                    'price' => 13.50, 
                    'ingredients' => '', 
                    'type' => 'noodles without soup',
                    'restaurant_id' => 6,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Noodles with pork & diced eggplant sauce', 
                    'price' => 0, 
                    'ingredients' => '', 
                    'type' => 'noodles without soup',
                    'restaurant_id' => 6,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Noodles with master chef special gravy', 
                    'price' => 0, 
                    'ingredients' => '', 
                    'type' => 'noodles without soup',
                    'restaurant_id' => 6,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Noodles simmered with flat beans', 
                    'price' => 0, 
                    'ingredients' => '', 
                    'type' => 'noodles without soup',
                    'restaurant_id' => 6,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Dry noodles topped with spring onions', 
                    'price' => 0, 
                    'ingredients' => '', 
                    'type' => 'noodles without soup',
                    'restaurant_id' => 6,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Shredded chicken with spicy cold noodles', 
                    'price' => 0, 
                    'ingredients' => '', 
                    'type' => 'noodles without soup',
                    'restaurant_id' => 6,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Fried noodles (with chicken, beef or pork)', 
                    'price' => 0, 
                    'ingredients' => '', 
                    'type' => 'noodles without soup',
                    'restaurant_id' => 6,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'SiChuan flavour noodles', 
                    'price' => 0, 
                    'ingredients' => '', 
                    'type' => 'noodles without soup',
                    'restaurant_id' => 6,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Fried diamond shaped noodles', 
                    'price' => 0, 
                    'ingredients' => '', 
                    'type' => 'noodles without soup',
                    'restaurant_id' => 6,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Chilli Chicken Noodles', 
                    'price' => 0, 
                    'ingredients' => '', 
                    'type' => 'noodles without soup',
                    'restaurant_id' => 6,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                //Others
                [
                    'name' => 'Pork & spring onion fried dumplings', 
                    'price' => 12, 
                    'ingredients' => '', 
                    'type' => 'others',
                    'restaurant_id' => 6,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Beef & spring onion fried dumpling', 
                    'price' => 12, 
                    'ingredients' => '', 
                    'type' => 'others',
                    'restaurant_id' => 6,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Pork & spring onion steamed buns', 
                    'price' => 1.50, 
                    'ingredients' => '', 
                    'type' => 'others',
                    'restaurant_id' => 6,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            ]
        );
    }
}
