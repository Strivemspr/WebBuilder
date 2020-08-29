<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateOpeningHoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opening_hours', function (Blueprint $table) {
            $table->id();
            $table->string('day_of_the_week1')->nullable();
            $table->string('start_time1')->nullable();
            $table->string('s_time1')->nullable();
            $table->string('end_time1')->nullable();
            $table->string('e_time1')->nullable();

            $table->string('day_of_the_week2')->nullable();
            $table->string('start_time2')->nullable();
            $table->string('s_time2')->nullable();
            $table->string('end_time2')->nullable();
            $table->string('e_time2')->nullable();

            $table->string('day_of_the_week3')->nullable();
            $table->string('start_time3')->nullable();
            $table->string('s_time3')->nullable();
            $table->string('end_time3')->nullable();
            $table->string('e_time3')->nullable();

            $table->string('day_of_the_week4')->nullable();
            $table->string('start_time4')->nullable();
            $table->string('s_time4')->nullable();
            $table->string('end_time4')->nullable();
            $table->string('e_time4')->nullable();

            $table->string('day_of_the_week5')->nullable();
            $table->string('start_time5')->nullable();
            $table->string('s_time5')->nullable();
            $table->string('end_time5')->nullable();
            $table->string('e_time5')->nullable();

            $table->string('day_of_the_week6')->nullable();
            $table->string('start_time6')->nullable();
            $table->string('s_time6')->nullable();
            $table->string('end_time6')->nullable();
            $table->string('e_time6')->nullable();

            $table->string('day_of_the_week7')->nullable();
            $table->string('start_time7')->nullable();
            $table->string('s_time7')->nullable();
            $table->string('end_time7')->nullable();
            $table->string('e_time7')->nullable();
            
            $table->timestamps();
            $table->integer("restaurant_id");
        });

        // DB::table('opening_hours')->insert(
        //     [     
        //         [
        //             'day_of_the_week' => 'Monday', 
        //             'start_time' => '5:00', 
        //             'end_time' => '10:00',
        //             'restaurant_id' => 1,
        //             'created_at' =>  date('Y-m-d H:i:s'),
        //             'updated_at' => date('Y-m-d H:i:s'),
        //         ],
        //     ]
        // );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opening_hours');
    }
}
