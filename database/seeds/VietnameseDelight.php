<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VietnameseDelight extends Seeder
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
                //rolls
                [
                    'name' => 'Cha Gio (3 cuon)', 
                    'price' => 7, 
                    'ingredients' => '', 
                    'type' => 'rolls',
                    'image' => '1.jpg',
                    'restaurant_id' => 13,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Bi Cuon (3 cuon)', 
                    'price' => 7, 
                    'ingredients' => '', 
                    'type' => 'rolls',
                    'image' => '2.jpg',
                    'restaurant_id' => 13,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Bun Bo Xao Xu (hoac com)', 
                    'price' => 12, 
                    'ingredients' => '', 
                    'type' => 'rolls',
                    'image' => '3.jpeg',
                    'restaurant_id' => 13,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Free range chicken breast', 
                    'price' => 36.50, 
                    'ingredients' => '', 
                    'type' => 'rolls',
                    'image' => '4.jpeg',
                    'restaurant_id' => 13,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Goi Cuon (3 cuon)', 
                    'price' => 7, 
                    'ingredients' => '', 
                    'type' => 'rolls',
                    'image' => '5.jpeg',
                    'restaurant_id' => 13,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Bun Suon Nuong', 
                    'price' => 12, 
                    'ingredients' => '', 
                    'type' => 'rolls',
                    'image' => '6.jpeg',
                    'restaurant_id' => 13,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Bun Bi Cha Gio', 
                    'price' => 11, 
                    'ingredients' => '', 
                    'type' => 'rolls',
                    'image' => '7.jpeg',
                    'restaurant_id' => 13,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Bun Ga Nuong Xa', 
                    'price' => 12, 
                    'ingredients' => '', 
                    'type' => 'rolls',
                    'image' => '8.jpeg',
                    'restaurant_id' => 13,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Bun Dac Biet', 
                    'price' => 15, 
                    'ingredients' => '', 
                    'type' => 'rolls',
                    'image' => '9.jpeg',
                    'restaurant_id' => 13,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Bun Ga Ca Ri (hoac com)', 
                    'price' => 12, 
                    'ingredients' => '', 
                    'type' => 'rolls',
                    'image' => '11.jpeg',
                    'restaurant_id' => 13,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Com Suon', 
                    'price' => 12, 
                    'ingredients' => '', 
                    'type' => 'rolls',
                    'image' => '12.jpeg',
                    'restaurant_id' => 13,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Bun Bo Xao Xu (hoac com)', 
                    'price' => 12, 
                    'ingredients' => '', 
                    'type' => 'rolls',
                    'image' => '13.jpeg',
                    'restaurant_id' => 13,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Com Suon Bi', 
                    'price' => 12, 
                    'ingredients' => '', 
                    'type' => 'rolls',
                    'image' => '14.jpg',
                    'restaurant_id' => 13,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Com Ga Nuong Xa', 
                    'price' => 12, 
                    'ingredients' => '', 
                    'type' => 'rolls',
                    'image' => '16.jpeg',
                    'restaurant_id' => 13,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Com Sot Ca Dui Ga Chien Gion', 
                    'price' => 12, 
                    'ingredients' => '', 
                    'type' => 'rolls',
                    'image' => '17.jpeg',
                    'restaurant_id' => 13,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Com Suon Tom', 
                    'price' => 13, 
                    'ingredients' => '', 
                    'type' => 'rolls',
                    'image' => '1.jpg',
                    'restaurant_id' => 13,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Com Tom Ram', 
                    'price' => 12, 
                    'ingredients' => '', 
                    'type' => 'rolls',
                    'image' => '2.jpg',
                    'restaurant_id' => 13,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Com Dac Biet (suon, bi, trung, tom)', 
                    'price' => 12, 
                    'ingredients' => '', 
                    'type' => 'rolls',
                    'image' => '3.jpeg',
                    'restaurant_id' => 13,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                //salads
                [
                    'name' => 'Ca / Bo Vien Chien', 
                    'price' => 6, 
                    'ingredients' => '', 
                    'type' => 'salads',
                    'image' => '4.jpeg',
                    'restaurant_id' => 13,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Canh Ga Chien Nuoc Mam', 
                    'price' => 8, 
                    'ingredients' => '', 
                    'type' => 'salads',
                    'image' => '5.jpeg',
                    'restaurant_id' => 13,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Goi Ga Nuong', 
                    'price' => 12, 
                    'ingredients' => '', 
                    'type' => 'salads',
                    'image' => '6.jpeg',
                    'restaurant_id' => 13,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Bun Cha Gio', 
                    'price' => 11, 
                    'ingredients' => '', 
                    'type' => 'salads',
                    'image' => '7.jpeg',
                    'restaurant_id' => 13,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Com Ga Hai Nam', 
                    'price' => 12, 
                    'ingredients' => '', 
                    'type' => 'salads',
                    'image' => '8.jpeg',
                    'restaurant_id' => 13,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                //soups
                [
                    'name' => 'Hu Tieu Nam Vang', 
                    'price' => 12, 
                    'ingredients' => '', 
                    'type' => 'soups',
                    'image' => '9.jpeg',
                    'restaurant_id' => 13,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Pho Ga Xe Phay', 
                    'price' => 11, 
                    'ingredients' => '', 
                    'type' => 'soups',
                    'image' => '10.jpeg',
                    'restaurant_id' => 13,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Pho Bo Vien', 
                    'price' => 12, 
                    'ingredients' => '', 
                    'type' => 'soups',
                    'image' => '11.jpeg',
                    'restaurant_id' => 13,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Pho Tai / Chin Bo Vien', 
                    'price' => 12, 
                    'ingredients' => '', 
                    'type' => 'soups',
                    'image' => '12.jpeg',
                    'restaurant_id' => 13,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            ]
        );
    }
}
