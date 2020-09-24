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

        DB::table('opening_hours')->insert(
            [     
                [
                    'day_of_the_week1' => 'Monday', 
                    'start_time1' => '9:30', 
                    's_time1' => 'am',
                    'end_time1' => "5:00",
                    'e_time1' => "pm",

                    'day_of_the_week2' => 'Tuesday', 
                    'start_time2' => '9:30', 
                    's_time2' => 'am',
                    'end_time2' => "5:00",
                    'e_time2' => "pm",

                    'day_of_the_week3' => 'Wednesday', 
                    'start_time3' => '9:30', 
                    's_time3' => 'am',
                    'end_time3' => "5:00",
                    'e_time3' => "pm",

                    'day_of_the_week4' => 'Thursday', 
                    'start_time4' => '9:30', 
                    's_time4' => 'am',
                    'end_time4' => "5:00",
                    'e_time4' => "pm",

                    'day_of_the_week5' => 'Friday', 
                    'start_time5' => '9:30', 
                    's_time5' => 'am',
                    'end_time5' => "5:00",
                    'e_time5' => "pm",

                    // 'day_of_the_week6' => 'Saturday', 
                    // 'start_time1' => '9:30', 
                    // 's_time1' => 'am',
                    // 'end_time1' => "5:00",
                    // 'e_time1' => "pm",

                    // 'day_of_the_week7' => 'Sunday', 
                    // 'start_time1' => '9:30', 
                    // 's_time1' => 'am',
                    // 'end_time1' => "5:00",
                    // 'e_time1' => "pm",
                    
                    'restaurant_id' => 1,
                    'created_at' =>  date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'day_of_the_week1' => 'Monday', 
                    'start_time1' => '9:30', 
                    's_time1' => 'am',
                    'end_time1' => "5:00",
                    'e_time1' => "pm",

                    'day_of_the_week2' => 'Tuesday', 
                    'start_time2' => '9:30', 
                    's_time2' => 'am',
                    'end_time2' => "5:00",
                    'e_time2' => "pm",

                    'day_of_the_week3' => 'Wednesday', 
                    'start_time3' => '9:30', 
                    's_time3' => 'am',
                    'end_time3' => "5:00",
                    'e_time3' => "pm",

                    'day_of_the_week4' => 'Thursday', 
                    'start_time4' => '9:30', 
                    's_time4' => 'am',
                    'end_time4' => "5:00",
                    'e_time4' => "pm",

                    'day_of_the_week5' => 'Friday', 
                    'start_time5' => '9:30', 
                    's_time5' => 'am',
                    'end_time5' => "5:00",
                    'e_time5' => "pm",

                    // 'day_of_the_week6' => 'Saturday', 
                    // 'start_time1' => '9:30', 
                    // 's_time1' => 'am',
                    // 'end_time1' => "5:00",
                    // 'e_time1' => "pm",

                    // 'day_of_the_week7' => 'Sunday', 
                    // 'start_time1' => '9:30', 
                    // 's_time1' => 'am',
                    // 'end_time1' => "5:00",
                    // 'e_time1' => "pm",
                    
                    'restaurant_id' => 2,
                    'created_at' =>  date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'day_of_the_week1' => 'Monday', 
                    'start_time1' => '9:30', 
                    's_time1' => 'am',
                    'end_time1' => "5:00",
                    'e_time1' => "pm",

                    'day_of_the_week2' => 'Tuesday', 
                    'start_time2' => '9:30', 
                    's_time2' => 'am',
                    'end_time2' => "5:00",
                    'e_time2' => "pm",

                    'day_of_the_week3' => 'Wednesday', 
                    'start_time3' => '9:30', 
                    's_time3' => 'am',
                    'end_time3' => "5:00",
                    'e_time3' => "pm",

                    'day_of_the_week4' => 'Thursday', 
                    'start_time4' => '9:30', 
                    's_time4' => 'am',
                    'end_time4' => "5:00",
                    'e_time4' => "pm",

                    'day_of_the_week5' => 'Friday', 
                    'start_time5' => '9:30', 
                    's_time5' => 'am',
                    'end_time5' => "5:00",
                    'e_time5' => "pm",

                    // 'day_of_the_week6' => 'Saturday', 
                    // 'start_time1' => '9:30', 
                    // 's_time1' => 'am',
                    // 'end_time1' => "5:00",
                    // 'e_time1' => "pm",

                    // 'day_of_the_week7' => 'Sunday', 
                    // 'start_time1' => '9:30', 
                    // 's_time1' => 'am',
                    // 'end_time1' => "5:00",
                    // 'e_time1' => "pm",
                    
                    'restaurant_id' => 3,
                    'created_at' =>  date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'day_of_the_week1' => 'Monday', 
                    'start_time1' => '9:30', 
                    's_time1' => 'am',
                    'end_time1' => "5:00",
                    'e_time1' => "pm",

                    'day_of_the_week2' => 'Tuesday', 
                    'start_time2' => '9:30', 
                    's_time2' => 'am',
                    'end_time2' => "5:00",
                    'e_time2' => "pm",

                    'day_of_the_week3' => 'Wednesday', 
                    'start_time3' => '9:30', 
                    's_time3' => 'am',
                    'end_time3' => "5:00",
                    'e_time3' => "pm",

                    'day_of_the_week4' => 'Thursday', 
                    'start_time4' => '9:30', 
                    's_time4' => 'am',
                    'end_time4' => "5:00",
                    'e_time4' => "pm",

                    'day_of_the_week5' => 'Friday', 
                    'start_time5' => '9:30', 
                    's_time5' => 'am',
                    'end_time5' => "5:00",
                    'e_time5' => "pm",

                    // 'day_of_the_week6' => 'Saturday', 
                    // 'start_time1' => '9:30', 
                    // 's_time1' => 'am',
                    // 'end_time1' => "5:00",
                    // 'e_time1' => "pm",

                    // 'day_of_the_week7' => 'Sunday', 
                    // 'start_time1' => '9:30', 
                    // 's_time1' => 'am',
                    // 'end_time1' => "5:00",
                    // 'e_time1' => "pm",
                    
                    'restaurant_id' => 4,
                    'created_at' =>  date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'day_of_the_week1' => 'Monday', 
                    'start_time1' => '9:30', 
                    's_time1' => 'am',
                    'end_time1' => "5:00",
                    'e_time1' => "pm",

                    'day_of_the_week2' => 'Tuesday', 
                    'start_time2' => '9:30', 
                    's_time2' => 'am',
                    'end_time2' => "5:00",
                    'e_time2' => "pm",

                    'day_of_the_week3' => 'Wednesday', 
                    'start_time3' => '9:30', 
                    's_time3' => 'am',
                    'end_time3' => "5:00",
                    'e_time3' => "pm",

                    'day_of_the_week4' => 'Thursday', 
                    'start_time4' => '9:30', 
                    's_time4' => 'am',
                    'end_time4' => "5:00",
                    'e_time4' => "pm",

                    'day_of_the_week5' => 'Friday', 
                    'start_time5' => '9:30', 
                    's_time5' => 'am',
                    'end_time5' => "5:00",
                    'e_time5' => "pm",

                    // 'day_of_the_week6' => 'Saturday', 
                    // 'start_time1' => '9:30', 
                    // 's_time1' => 'am',
                    // 'end_time1' => "5:00",
                    // 'e_time1' => "pm",

                    // 'day_of_the_week7' => 'Sunday', 
                    // 'start_time1' => '9:30', 
                    // 's_time1' => 'am',
                    // 'end_time1' => "5:00",
                    // 'e_time1' => "pm",
                    
                    'restaurant_id' => 5,
                    'created_at' =>  date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'day_of_the_week1' => 'Monday', 
                    'start_time1' => '9:30', 
                    's_time1' => 'am',
                    'end_time1' => "5:00",
                    'e_time1' => "pm",

                    'day_of_the_week2' => 'Tuesday', 
                    'start_time2' => '9:30', 
                    's_time2' => 'am',
                    'end_time2' => "5:00",
                    'e_time2' => "pm",

                    'day_of_the_week3' => 'Wednesday', 
                    'start_time3' => '9:30', 
                    's_time3' => 'am',
                    'end_time3' => "5:00",
                    'e_time3' => "pm",

                    'day_of_the_week4' => 'Thursday', 
                    'start_time4' => '9:30', 
                    's_time4' => 'am',
                    'end_time4' => "5:00",
                    'e_time4' => "pm",

                    'day_of_the_week5' => 'Friday', 
                    'start_time5' => '9:30', 
                    's_time5' => 'am',
                    'end_time5' => "5:00",
                    'e_time5' => "pm",

                    // 'day_of_the_week6' => 'Saturday', 
                    // 'start_time1' => '9:30', 
                    // 's_time1' => 'am',
                    // 'end_time1' => "5:00",
                    // 'e_time1' => "pm",

                    // 'day_of_the_week7' => 'Sunday', 
                    // 'start_time1' => '9:30', 
                    // 's_time1' => 'am',
                    // 'end_time1' => "5:00",
                    // 'e_time1' => "pm",
                    
                    'restaurant_id' => 6,
                    'created_at' =>  date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'day_of_the_week1' => 'Monday', 
                    'start_time1' => '9:30', 
                    's_time1' => 'am',
                    'end_time1' => "5:00",
                    'e_time1' => "pm",

                    'day_of_the_week2' => 'Tuesday', 
                    'start_time2' => '9:30', 
                    's_time2' => 'am',
                    'end_time2' => "5:00",
                    'e_time2' => "pm",

                    'day_of_the_week3' => 'Wednesday', 
                    'start_time3' => '9:30', 
                    's_time3' => 'am',
                    'end_time3' => "5:00",
                    'e_time3' => "pm",

                    'day_of_the_week4' => 'Thursday', 
                    'start_time4' => '9:30', 
                    's_time4' => 'am',
                    'end_time4' => "5:00",
                    'e_time4' => "pm",

                    'day_of_the_week5' => 'Friday', 
                    'start_time5' => '9:30', 
                    's_time5' => 'am',
                    'end_time5' => "5:00",
                    'e_time5' => "pm",

                    // 'day_of_the_week6' => 'Saturday', 
                    // 'start_time1' => '9:30', 
                    // 's_time1' => 'am',
                    // 'end_time1' => "5:00",
                    // 'e_time1' => "pm",

                    // 'day_of_the_week7' => 'Sunday', 
                    // 'start_time1' => '9:30', 
                    // 's_time1' => 'am',
                    // 'end_time1' => "5:00",
                    // 'e_time1' => "pm",
                    
                    'restaurant_id' => 7,
                    'created_at' =>  date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'day_of_the_week1' => 'Monday', 
                    'start_time1' => '9:30', 
                    's_time1' => 'am',
                    'end_time1' => "5:00",
                    'e_time1' => "pm",

                    'day_of_the_week2' => 'Tuesday', 
                    'start_time2' => '9:30', 
                    's_time2' => 'am',
                    'end_time2' => "5:00",
                    'e_time2' => "pm",

                    'day_of_the_week3' => 'Wednesday', 
                    'start_time3' => '9:30', 
                    's_time3' => 'am',
                    'end_time3' => "5:00",
                    'e_time3' => "pm",

                    'day_of_the_week4' => 'Thursday', 
                    'start_time4' => '9:30', 
                    's_time4' => 'am',
                    'end_time4' => "5:00",
                    'e_time4' => "pm",

                    'day_of_the_week5' => 'Friday', 
                    'start_time5' => '9:30', 
                    's_time5' => 'am',
                    'end_time5' => "5:00",
                    'e_time5' => "pm",

                    // 'day_of_the_week6' => 'Saturday', 
                    // 'start_time1' => '9:30', 
                    // 's_time1' => 'am',
                    // 'end_time1' => "5:00",
                    // 'e_time1' => "pm",

                    // 'day_of_the_week7' => 'Sunday', 
                    // 'start_time1' => '9:30', 
                    // 's_time1' => 'am',
                    // 'end_time1' => "5:00",
                    // 'e_time1' => "pm",
                    
                    'restaurant_id' => 8,
                    'created_at' =>  date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'day_of_the_week1' => 'Monday', 
                    'start_time1' => '9:30', 
                    's_time1' => 'am',
                    'end_time1' => "5:00",
                    'e_time1' => "pm",

                    'day_of_the_week2' => 'Tuesday', 
                    'start_time2' => '9:30', 
                    's_time2' => 'am',
                    'end_time2' => "5:00",
                    'e_time2' => "pm",

                    'day_of_the_week3' => 'Wednesday', 
                    'start_time3' => '9:30', 
                    's_time3' => 'am',
                    'end_time3' => "5:00",
                    'e_time3' => "pm",

                    'day_of_the_week4' => 'Thursday', 
                    'start_time4' => '9:30', 
                    's_time4' => 'am',
                    'end_time4' => "5:00",
                    'e_time4' => "pm",

                    'day_of_the_week5' => 'Friday', 
                    'start_time5' => '9:30', 
                    's_time5' => 'am',
                    'end_time5' => "5:00",
                    'e_time5' => "pm",

                    // 'day_of_the_week6' => 'Saturday', 
                    // 'start_time1' => '9:30', 
                    // 's_time1' => 'am',
                    // 'end_time1' => "5:00",
                    // 'e_time1' => "pm",

                    // 'day_of_the_week7' => 'Sunday', 
                    // 'start_time1' => '9:30', 
                    // 's_time1' => 'am',
                    // 'end_time1' => "5:00",
                    // 'e_time1' => "pm",
                    
                    'restaurant_id' => 9,
                    'created_at' =>  date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'day_of_the_week1' => 'Monday', 
                    'start_time1' => '9:30', 
                    's_time1' => 'am',
                    'end_time1' => "5:00",
                    'e_time1' => "pm",

                    'day_of_the_week2' => 'Tuesday', 
                    'start_time2' => '9:30', 
                    's_time2' => 'am',
                    'end_time2' => "5:00",
                    'e_time2' => "pm",

                    'day_of_the_week3' => 'Wednesday', 
                    'start_time3' => '9:30', 
                    's_time3' => 'am',
                    'end_time3' => "5:00",
                    'e_time3' => "pm",

                    'day_of_the_week4' => 'Thursday', 
                    'start_time4' => '9:30', 
                    's_time4' => 'am',
                    'end_time4' => "5:00",
                    'e_time4' => "pm",

                    'day_of_the_week5' => 'Friday', 
                    'start_time5' => '9:30', 
                    's_time5' => 'am',
                    'end_time5' => "5:00",
                    'e_time5' => "pm",

                    // 'day_of_the_week6' => 'Saturday', 
                    // 'start_time1' => '9:30', 
                    // 's_time1' => 'am',
                    // 'end_time1' => "5:00",
                    // 'e_time1' => "pm",

                    // 'day_of_the_week7' => 'Sunday', 
                    // 'start_time1' => '9:30', 
                    // 's_time1' => 'am',
                    // 'end_time1' => "5:00",
                    // 'e_time1' => "pm",
                    
                    'restaurant_id' => 10,
                    'created_at' =>  date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'day_of_the_week1' => 'Monday', 
                    'start_time1' => '9:30', 
                    's_time1' => 'am',
                    'end_time1' => "5:00",
                    'e_time1' => "pm",

                    'day_of_the_week2' => 'Tuesday', 
                    'start_time2' => '9:30', 
                    's_time2' => 'am',
                    'end_time2' => "5:00",
                    'e_time2' => "pm",

                    'day_of_the_week3' => 'Wednesday', 
                    'start_time3' => '9:30', 
                    's_time3' => 'am',
                    'end_time3' => "5:00",
                    'e_time3' => "pm",

                    'day_of_the_week4' => 'Thursday', 
                    'start_time4' => '9:30', 
                    's_time4' => 'am',
                    'end_time4' => "5:00",
                    'e_time4' => "pm",

                    'day_of_the_week5' => 'Friday', 
                    'start_time5' => '9:30', 
                    's_time5' => 'am',
                    'end_time5' => "5:00",
                    'e_time5' => "pm",

                    // 'day_of_the_week6' => 'Saturday', 
                    // 'start_time1' => '9:30', 
                    // 's_time1' => 'am',
                    // 'end_time1' => "5:00",
                    // 'e_time1' => "pm",

                    // 'day_of_the_week7' => 'Sunday', 
                    // 'start_time1' => '9:30', 
                    // 's_time1' => 'am',
                    // 'end_time1' => "5:00",
                    // 'e_time1' => "pm",
                    
                    'restaurant_id' => 11,
                    'created_at' =>  date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'day_of_the_week1' => 'Monday', 
                    'start_time1' => '9:30', 
                    's_time1' => 'am',
                    'end_time1' => "5:00",
                    'e_time1' => "pm",

                    'day_of_the_week2' => 'Tuesday', 
                    'start_time2' => '9:30', 
                    's_time2' => 'am',
                    'end_time2' => "5:00",
                    'e_time2' => "pm",

                    'day_of_the_week3' => 'Wednesday', 
                    'start_time3' => '9:30', 
                    's_time3' => 'am',
                    'end_time3' => "5:00",
                    'e_time3' => "pm",

                    'day_of_the_week4' => 'Thursday', 
                    'start_time4' => '9:30', 
                    's_time4' => 'am',
                    'end_time4' => "5:00",
                    'e_time4' => "pm",

                    'day_of_the_week5' => 'Friday', 
                    'start_time5' => '9:30', 
                    's_time5' => 'am',
                    'end_time5' => "5:00",
                    'e_time5' => "pm",

                    // 'day_of_the_week6' => 'Saturday', 
                    // 'start_time1' => '9:30', 
                    // 's_time1' => 'am',
                    // 'end_time1' => "5:00",
                    // 'e_time1' => "pm",

                    // 'day_of_the_week7' => 'Sunday', 
                    // 'start_time1' => '9:30', 
                    // 's_time1' => 'am',
                    // 'end_time1' => "5:00",
                    // 'e_time1' => "pm",
                    
                    'restaurant_id' => 12,
                    'created_at' =>  date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'day_of_the_week1' => 'Monday', 
                    'start_time1' => '9:30', 
                    's_time1' => 'am',
                    'end_time1' => "5:00",
                    'e_time1' => "pm",

                    'day_of_the_week2' => 'Tuesday', 
                    'start_time2' => '9:30', 
                    's_time2' => 'am',
                    'end_time2' => "5:00",
                    'e_time2' => "pm",

                    'day_of_the_week3' => 'Wednesday', 
                    'start_time3' => '9:30', 
                    's_time3' => 'am',
                    'end_time3' => "5:00",
                    'e_time3' => "pm",

                    'day_of_the_week4' => 'Thursday', 
                    'start_time4' => '9:30', 
                    's_time4' => 'am',
                    'end_time4' => "5:00",
                    'e_time4' => "pm",

                    'day_of_the_week5' => 'Friday', 
                    'start_time5' => '9:30', 
                    's_time5' => 'am',
                    'end_time5' => "5:00",
                    'e_time5' => "pm",

                    // 'day_of_the_week6' => 'Saturday', 
                    // 'start_time1' => '9:30', 
                    // 's_time1' => 'am',
                    // 'end_time1' => "5:00",
                    // 'e_time1' => "pm",

                    // 'day_of_the_week7' => 'Sunday', 
                    // 'start_time1' => '9:30', 
                    // 's_time1' => 'am',
                    // 'end_time1' => "5:00",
                    // 'e_time1' => "pm",
                    
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
        Schema::dropIfExists('opening_hours');
    }
}
