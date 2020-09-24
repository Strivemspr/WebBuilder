<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateSocialMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_media', function (Blueprint $table) {
            $table->id();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->integer('restaurant_id');
            $table->timestamps();
        });

        DB::table('social_media')->insert(
            [     
                [
                    'facebook' => '100009792617708', 
                    'instagram' => 'koaasy', 
                    'twitter' => 'koaasy',
                    'restaurant_id' => 1,
                    'created_at' =>  date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'facebook' => '100009792617708', 
                    'instagram' => 'koaasy', 
                    'twitter' => 'koaasy',
                    'restaurant_id' => 2,
                    'created_at' =>  date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'facebook' => '100009792617708', 
                    'instagram' => 'koaasy', 
                    'twitter' => 'koaasy',
                    'restaurant_id' => 3,
                    'created_at' =>  date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'facebook' => '100009792617708', 
                    'instagram' => 'koaasy', 
                    'twitter' => 'koaasy',
                    'restaurant_id' => 4,
                    'created_at' =>  date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'facebook' => '100009792617708', 
                    'instagram' => 'koaasy', 
                    'twitter' => 'koaasy',
                    'restaurant_id' => 5,
                    'created_at' =>  date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'facebook' => '100009792617708', 
                    'instagram' => 'koaasy', 
                    'twitter' => 'koaasy',
                    'restaurant_id' => 6,
                    'created_at' =>  date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'facebook' => '100009792617708', 
                    'instagram' => 'koaasy', 
                    'twitter' => 'koaasy',
                    'restaurant_id' => 7,
                    'created_at' =>  date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'facebook' => '100009792617708', 
                    'instagram' => 'koaasy', 
                    'twitter' => 'koaasy',
                    'restaurant_id' => 8,
                    'created_at' =>  date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'facebook' => '100009792617708', 
                    'instagram' => 'koaasy', 
                    'twitter' => 'koaasy',
                    'restaurant_id' => 9,
                    'created_at' =>  date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'facebook' => '100009792617708', 
                    'instagram' => 'koaasy', 
                    'twitter' => 'koaasy',
                    'restaurant_id' => 10,
                    'created_at' =>  date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'facebook' => '100009792617708', 
                    'instagram' => 'koaasy', 
                    'twitter' => 'koaasy',
                    'restaurant_id' => 11,
                    'created_at' =>  date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'facebook' => '100009792617708', 
                    'instagram' => 'koaasy', 
                    'twitter' => 'koaasy',
                    'restaurant_id' => 12,
                    'created_at' =>  date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'facebook' => '100009792617708', 
                    'instagram' => 'koaasy', 
                    'twitter' => 'koaasy',
                    'restaurant_id' => 13,
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
        Schema::dropIfExists('social_media');
    }
}
