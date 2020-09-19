<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->longText('categories');
            $table->integer('restaurant_id');
            $table->timestamps();
        });

        DB::table('categories')->insert(
            [  
                [
                    //Alfies
                    'categories' => 'size,extras,the fruit juice,the veg juice,smoothies',
                    'restaurant_id' => 1,
                ],
                [
                    //Bebop Kitchen Korean
                    'categories' => 'sauces,soups,sizzling plates,noodles,combos',
                    'restaurant_id' => 2,
                ],
                [
                    //Daruma Ramen
                    'categories' => 'extras,tonkotsu ramen noodle,chicken donburi,ramen,japanese curry',
                    'restaurant_id' => 3,
                ],
                [
                    //Dragon Boat Restaurant
                    'categories' => 'fried dim sum,desserts,steamed dim sum,congee',
                    'restaurant_id' => 4,
                ],
                [
                    //Ganzui ramen bar
                    'categories' => 'soups,soupless ramen,donburi with rice,side dishes,BBQ and pot,extras,desserts',
                    'restaurant_id' => 5,
                ],
                [
                    //Master Chef
                    'categories' => 'noodles with soup,noodles without soup,others',
                    'restaurant_id' => 6,
                ],
                [
                    //Pepper Kitchen
                    'categories' => 'dishes',
                    'restaurant_id' => 7,
                ],
                [
                    //Spice of India
                    'categories' => 'combos,drinks,vegeterian,non vegetarian',
                    'restaurant_id' => 8,
                ],
                [
                    //Spill Cafe
                    'categories' => 'toasted bagels,cold drinks,flavoured coffee,teas',
                    'restaurant_id' => 9,
                ],
                [
                    //The Gourmet Thai
                    'categories' => 'entrees,soups,noodles',
                    'restaurant_id' => 10,
                ],
                [
                    //Umi Sushi
                    'categories' => 'donburi,salad and noodles,katsu and yaki,noodle soups',
                    'restaurant_id' => 11,
                ],
                [
                    //Waroeng Bali
                    'categories' => 'soups,skewers,dishes',
                    'restaurant_id' => 12,
                ],
                [
                    //Vietnamese Delight
                    'categories' => 'rolls,salads,soups',
                    'restaurant_id' => 13,
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
        Schema::dropIfExists('categories');
    }
}
