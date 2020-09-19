<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->string('ingredients')->nullable();
            $table->string('type')->nullable();
            $table->integer('restaurant_id');
            $table->timestamps();
        });

        DB::table('menus')->insert(
            [   
                //Sizes
                [
                    'name' => 'Small', 
                    'price' => 6.50, 
                    'ingredients' => '', 
                    'type' => 'size',
                    'restaurant_id' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Medium', 
                    'price' => 7.50, 
                    'ingredients' => '', 
                    'type' => 'size',
                    'restaurant_id' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Large', 
                    'price' => 8.50, 
                    'ingredients' => '', 
                    'type' => 'size',
                    'restaurant_id' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                // Extras
                [
                    'name' => 'Ginger', 
                    'price' => 0.50, 
                    'ingredients' => '', 
                    'type' => 'extras',
                    'restaurant_id' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Fruit', 
                    'price' => 1.00, 
                    'ingredients' => '', 
                    'type' => 'extras',
                    'restaurant_id' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],  
                // The Fruit Juice
                [
                    'name' => 'Lush', 
                    'price' => 0, 
                    'ingredients' => 'Rock Melon, Apple, Pineapple', 
                    'type' => 'the fruit juice',
                    'restaurant_id' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],    
                [
                    'name' => 'Pash', 
                    'price' => 0, 
                    'ingredients' => 'Mango, Passion fruit, Apple', 
                    'type' => 'the fruit juice',
                    'restaurant_id' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ], 
                [
                    'name' => 'Antioxidant', 
                    'price' => 0, 
                    'ingredients' => 'Strawberries, Pineapple, Orange', 
                    'type' => 'the fruit juice',
                    'restaurant_id' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'C+', 
                    'price' => 0, 
                    'ingredients' => 'Grapefruit, Lemon, Orange, Pineapple', 
                    'type' => 'the fruit juice',
                    'restaurant_id' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Skinny', 
                    'price' => 0, 
                    'ingredients' => 'Pineapple, Apple, Strawberries', 
                    'type' => 'the fruit juice',
                    'restaurant_id' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Slimmers', 
                    'price' => 0, 
                    'ingredients' => 'Kiwifruit, Pineapple, Apple', 
                    'type' => 'the fruit juice',
                    'restaurant_id' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Zest', 
                    'price' => 0, 
                    'ingredients' => 'Orange, Carrot, Strawberries', 
                    'type' => 'the fruit juice',
                    'restaurant_id' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Yellow Sky', 
                    'price' => 0, 
                    'ingredients' => 'Apple, Orange, Pineapple', 
                    'type' => 'the fruit juice',
                    'restaurant_id' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Devil King', 
                    'price' => 0, 
                    'ingredients' => 'Beetroot, Avocado, Apple', 
                    'type' => 'the fruit juice',
                    'restaurant_id' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Alfie\'s', 
                    'price' => 0, 
                    'ingredients' => 'Orange, Pineapple, Passion fruit, Mango', 
                    'type' => 'the fruit juice',
                    'restaurant_id' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                // The Veg Juice
                [
                    'name' => 'Cleanser', 
                    'price' => 0, 
                    'ingredients' => 'Cucumber, Carrot, Beetroot, Apple', 
                    'type' => 'the veg juice',
                    'restaurant_id' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Taliano', 
                    'price' => 0, 
                    'ingredients' => 'Green pepper, Celery, Cucumber, Apple', 
                    'type' => 'the veg juice',
                    'restaurant_id' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Carotine', 
                    'price' => 0, 
                    'ingredients' => 'Tomato, Carrot, Beetroot', 
                    'type' => 'the veg juice',
                    'restaurant_id' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Winter', 
                    'price' => 0, 
                    'ingredients' => 'Tomato, Beetroot, Garlic', 
                    'type' => 'the veg juice',
                    'restaurant_id' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Euro', 
                    'price' => 0, 
                    'ingredients' => 'Celery, Cucumber, Beetroot, Apple', 
                    'type' => 'the veg juice',
                    'restaurant_id' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Autumn', 
                    'price' => 0, 
                    'ingredients' => 'Apple, Carrot, Ginger ', 
                    'type' => 'the veg juice',
                    'restaurant_id' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Summer', 
                    'price' => 0, 
                    'ingredients' => 'Tomato, Orange, Beetroot', 
                    'type' => 'the veg juice',
                    'restaurant_id' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                // Smoothies
                [
                    'name' => 'Orange Rock ', 
                    'price' => 0, 
                    'ingredients' => 'Rock melon, Orange, Yogurt, Milk', 
                    'type' => 'smoothies',
                    'restaurant_id' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Berry Punch', 
                    'price' => 0, 
                    'ingredients' => 'Strawberries, Pineapple, Banana, Orange, Yogurt, Milk', 
                    'type' => 'smoothies',
                    'restaurant_id' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Pineapple Dream', 
                    'price' => 0, 
                    'ingredients' => 'Avocado, Pineapple, Yogurt, Milk', 
                    'type' => 'smoothies',
                    'restaurant_id' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Mango Passion', 
                    'price' => 0, 
                    'ingredients' => 'Mango, Passion fruit, Yogurt, Milk', 
                    'type' => 'smoothies',
                    'restaurant_id' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Wake up', 
                    'price' => 0, 
                    'ingredients' => 'Banana, Coffee, Yogurt, Milk', 
                    'type' => 'smoothies',
                    'restaurant_id' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Banana', 
                    'price' => 0, 
                    'ingredients' => 'Banana, Yogurt, Milk', 
                    'type' => 'smoothies',
                    'restaurant_id' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
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
        Schema::dropIfExists('menus');
    }
}
