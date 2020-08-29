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
                [
                    'name' => 'Grilled Beef with potatoes', 
                    'price' => 30, 
                    'ingredients' => 'Tomatoes,Beef,Potatoes,Rice', 
                    'type' => 'breakfast',
                    'restaurant_id' => 1,
                    'created_at' =>  date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],    
                [
                    'name' => 'Grilled Crab with Onion', 
                    'price' => 29, 
                    'ingredients' => 'Tomatoes,Crab,Potatoes,Rice', 
                    'type' => 'breakfast',
                    'restaurant_id' => 1,
                    'created_at' =>  date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ], 
                [
                    'name' => 'Grilled Salmon with potatoes', 
                    'price' => 35, 
                    'ingredients' => 'Salmon,Potatoes,Rice,Sauce', 
                    'type' => 'breakfast',
                    'restaurant_id' => 1,
                    'created_at' =>  date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Burnt Eggplant', 
                    'price' => 30, 
                    'ingredients' => 'Harissa,Braised Beans,Baba Ghanoush,Crispy Chickpeas', 
                    'type' => 'lunch',
                    'restaurant_id' => 1,
                    'created_at' =>  date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],    
                [
                    'name' => 'Green Salad', 
                    'price' => 29, 
                    'ingredients' => 'Lemon Zhoug,Pecorino', 
                    'type' => 'lunch',
                    'restaurant_id' => 1,
                    'created_at' =>  date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ], 
                [
                    'name' => 'Roast Cabbage', 
                    'price' => 35, 
                    'ingredients' => 'Toasted Seeds,Chardonnay Vinaigrette', 
                    'type' => 'lunch',
                    'restaurant_id' => 1,
                    'created_at' =>  date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ], 
                [
                    'name' => 'parmesan crusted filet mignon', 
                    'price' => 30, 
                    'ingredients' => 'pommes dauphines,seasonal greens,wild mushroom,beef jus', 
                    'type' => 'dinner',
                    'restaurant_id' => 1,
                    'created_at' =>  date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],    
                [
                    'name' => 'hawke’s bay chargrilled lamb', 
                    'price' => 29, 
                    'ingredients' => 'rosemary & lemon,potato & anchovy gratin,seasonal greens', 
                    'type' => 'dinner',
                    'restaurant_id' => 1,
                    'created_at' =>  date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ], 
                [
                    'name' => 'one pan chicken kiev', 
                    'price' => 35, 
                    'ingredients' => 'confit chicken leg,squash saag aloo,greens,chicken jus', 
                    'type' => 'dinner',
                    'restaurant_id' => 1,
                    'created_at' =>  date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ], 
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
