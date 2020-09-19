<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('street_address');
            $table->string('city');
            $table->string('suburb');
            $table->string('country');
            $table->string('zip_code');
            // $table->gps_location(); // TODO: implement gps location
            $table->mediumText('image')->nullable(); 
            $table->text('description');
            $table->string('type');
            $table->integer('user_id');
            $table->timestamps();
        });

        DB::table('restaurants')->insert(
            [     
                [
                    'name' => 'Alfie Juice & Gelato', 
                    'phone' => '6493754980', 
                    'email' => 'testEmail@test.com', 
                    'street_address' => '21-25 Elliott Street', 
                    'city' => 'Auckland',
                    'suburb' => 'Auckland CBD',
                    'country' => 'New Zealand',
                    'zip_code' => '1010',
                    'description' => 'Dessert Parlour, Beverage Shop - Juices, Ice Cream, Desserts on Elliott Street',
                    'type' => 'common',
                    'image' => '1.jpg',
                    'user_id' => 1,
                    'created_at' =>  date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Bebop Kitchen Korean', 
                    'phone' => '6493774212', 
                    'email' => 'testEmail@test.com', 
                    'street_address' => '21-25 Elliott Street', 
                    'city' => 'Auckland',
                    'suburb' => 'Auckland CBD',
                    'country' => 'New Zealand',
                    'zip_code' => '1010',
                    'description' => 'Quick Bites - food court Korean Elliott Street',
                    'type' => 'korean',
                    'image' => '2.jpg',
                    'user_id' => 1,
                    'created_at' =>  date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Daruma Ramen', 
                    'phone' => '6493021790', 
                    'email' => 'testEmail@test.com', 
                    'street_address' => '21-25 Elliott Street', 
                    'city' => 'Auckland',
                    'suburb' => 'Auckland CBD',
                    'country' => 'New Zealand',
                    'zip_code' => '1010',
                    'description' => 'Casual Dining Food Court Ramen, Japanese, Elliott Street',
                    'type' => 'japanese',
                    'image' => '3.jpeg',
                    'user_id' => 1,
                    'created_at' =>  date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Dragon Boat Restaurant', 
                    'phone' => '093796996', 
                    'email' => 'testEmail@test.com', 
                    'street_address' => '21-25 Elliott Street', 
                    'city' => 'Auckland',
                    'suburb' => 'Auckland CBD',
                    'country' => 'New Zealand',
                    'zip_code' => '1010',
                    'description' => 'Chinese restaurant',
                    'type' => 'chinese',
                    'image' => '4.jpeg',
                    'user_id' => 1,
                    'created_at' =>  date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Ganzui ramen bar', 
                    'phone' => '093580240', 
                    'email' => 'testEmail@test.com', 
                    'street_address' => '21-25 Elliott Street', 
                    'city' => 'Auckland',
                    'suburb' => 'Auckland CBD',
                    'country' => 'New Zealand',
                    'zip_code' => '1010',
                    'description' => 'Casual Dining - Japanese, Ramen, Elliott Street',
                    'type' => 'japanese',
                    'image' => '5.jpeg',
                    'user_id' => 1,
                    'created_at' =>  date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Master Chef', 
                    'phone' => '6493775909', 
                    'email' => 'testEmail@test.com', 
                    'street_address' => '21-25 Elliott Street', 
                    'city' => 'Auckland',
                    'suburb' => 'Auckland CBD',
                    'country' => 'New Zealand',
                    'zip_code' => '1010',
                    'description' => 'Quick Bites, Food Court - Chinese, Elliott Street',
                    'type' => 'chinese',
                    'image' => '6.jpeg',
                    'user_id' => 1,
                    'created_at' =>  date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Pepper Kitchen', 
                    'phone' => '6496306882', 
                    'email' => 'testEmail@test.com', 
                    'street_address' => '21-25 Elliott Street', 
                    'city' => 'Auckland',
                    'suburb' => 'Auckland CBD',
                    'country' => 'New Zealand',
                    'zip_code' => '1010',
                    'description' => 'Casual Dining, Food Court - BBQ, Taiwanese, Elliott Street',
                    'type' => 'chinese',
                    'image' => '7.jpeg',
                    'user_id' => 1,
                    'created_at' =>  date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Spice of India', 
                    'phone' => '093681368', 
                    'email' => 'testEmail@test.com', 
                    'street_address' => '21-25 Elliott Streett', 
                    'city' => 'Auckland',
                    'suburb' => 'Auckland CBD',
                    'country' => 'New Zealand',
                    'zip_code' => '1010',
                    'description' => 'Quick Bites, Food Court - North Indian, Indian
                    Elliott Street',
                    'type' => 'indian',
                    'image' => '8.jpeg',
                    'user_id' => 1,
                    'created_at' =>  date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Spill Cafe', 
                    'phone' => '6493099932', 
                    'email' => 'testEmail@test.com', 
                    'street_address' => '21-25 Elliott Street', 
                    'city' => 'Auckland',
                    'suburb' => 'Auckland CBD',
                    'country' => 'New Zealand',
                    'zip_code' => '1010',
                    'description' => 'Café, Food Court - Cafe Food, Coffee and Tea, Elliott Street',
                    'type' => 'cafe',
                    'image' => '9.jpeg',
                    'user_id' => 1,
                    'created_at' =>  date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'The Gourmet Thai', 
                    'phone' => '6493792801', 
                    'email' => 'testEmail@test.com', 
                    'street_address' => '21-25 Elliott Street', 
                    'city' => 'Auckland',
                    'suburb' => 'Auckland CBD',
                    'country' => 'New Zealand',
                    'zip_code' => '1010',
                    'description' => 'Quick Bites, Food Court - Thai, Elliott Street',
                    'type' => 'thai',
                    'image' => '10.jpeg',
                    'user_id' => 1,
                    'created_at' =>  date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Umi Sushi', 
                    'phone' => '093092766', 
                    'email' => 'testEmail@test.com', 
                    'street_address' => '21-25 Elliott Street', 
                    'city' => 'Auckland',
                    'suburb' => 'Auckland CBD',
                    'country' => 'New Zealand',
                    'zip_code' => '1010',
                    'description' => 'Quick Bites - Sushi, Japanese',
                    'type' => 'japanese',
                    'image' => '11.jpeg',
                    'user_id' => 1,
                    'created_at' =>  date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Waroeng Bali', 
                    'phone' => '093031558', 
                    'email' => 'testEmail@test.com', 
                    'street_address' => '21-25 Elliott Street', 
                    'city' => 'Auckland',
                    'suburb' => 'Auckland CBD',
                    'country' => 'New Zealand',
                    'zip_code' => '1010',
                    'description' => 'Quick Bites, Food Court - Indonesian',
                    'type' => 'indonesian',
                    'image' => '12.jpeg',
                    'user_id' => 1,
                    'created_at' =>  date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Vietnamese Delight', 
                    'phone' => '093093339', 
                    'email' => 'testEmail@test.com', 
                    'street_address' => '21-25 Elliott Street', 
                    'city' => 'Auckland',
                    'suburb' => 'Auckland CBD',
                    'country' => 'New Zealand',
                    'zip_code' => '1010',
                    'description' => 'Quick Bites, Food Court - Vietnamese',
                    'type' => 'vietnamese',
                    'image' => '13.jpeg',
                    'user_id' => 1,
                    'created_at' =>  date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurants');
    }
}
