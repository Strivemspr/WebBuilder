<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenzuiRamen extends Seeder
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
                //Soups
                [
                    'name' => 'Shoyu Ramen', 
                    'price' => 9.50, 
                    'ingredients' => 'Soya taste soup with BBQ pork & veggies', 
                    'type' => 'soups',
                    'image' => '10.jpeg',
                    'restaurant_id' => 5,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Cha-Shu-men', 
                    'price' => 12, 
                    'ingredients' => 'Soya taste soup with lots of BBQ pork & veggies', 
                    'type' => 'soups',
                    'image' => '11.jpeg',
                    'restaurant_id' => 5,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Genzui Ramen', 
                    'price' => 10.50, 
                    'ingredients' => 'Soya taste soup with BBQ pork. tempura & veggies', 
                    'type' => 'soups',
                    'image' => '12.jpeg',
                    'restaurant_id' => 5,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Chicken Ramen', 
                    'price' => 11, 
                    'ingredients' => 'Soya taste with chicken & veges', 
                    'type' => 'soups',
                    'image' => '13.jpeg',
                    'restaurant_id' => 5,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Wafu Ramen', 
                    'price' => 11, 
                    'ingredients' => 'Soya + fish flavoured soup with BBQ pork and veges', 
                    'type' => 'soups',
                    'image' => '14.jpg',
                    'restaurant_id' => 5,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Tempura Ramen', 
                    'price' => 11, 
                    'ingredients' => 'Soya with fish flavorured with tempura prawn ', 
                    'type' => 'soups',
                    'image' => '1.jpg',
                    'restaurant_id' => 5,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Beef Sukiyaki Ramen', 
                    'price' => 11, 
                    'ingredients' => 'Soya tast soup with sukiyaki style beef & veges', 
                    'type' => 'soups',
                    'image' => '3.jpeg',
                    'restaurant_id' => 5,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Nabeyaki Ramen', 
                    'price' => 16, 
                    'ingredients' => 'Soya taste soup with BBQ pork, chicken & veges', 
                    'type' => 'soups',
                    'image' => '2.jpg',
                    'restaurant_id' => 5,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Shio Ramen', 
                    'price' => 10, 
                    'ingredients' => 'Clear soup with BBQ pork & veges', 
                    'type' => 'soups',
                    'image' => '3.jpeg',
                    'restaurant_id' => 5,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Prawn Shio Ramen', 
                    'price' => 12, 
                    'ingredients' => 'Clear soup, Prawn, BBQ pork, Veges', 
                    'type' => 'soups',
                    'image' => '8.jpeg',
                    'restaurant_id' => 5,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Spicy shio ramen', 
                    'price' => 11, 
                    'ingredients' => 'Spicy soup, BBQ pork, Veges', 
                    'type' => 'soups',
                    'image' => '4.jpeg',
                    'restaurant_id' => 5,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Vege Ramen', 
                    'price' => 11, 
                    'ingredients' => 'Clear soup with lots of ramen', 
                    'type' => 'soups',
                    'image' => '5.jpeg',
                    'restaurant_id' => 5,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Seafood ramen ', 
                    'price' => 14, 
                    'ingredients' => 'Clear soup, Mussels, Calamari, Shrimps, Veges', 
                    'type' => 'soups',
                    'image' => '6.jpeg',
                    'restaurant_id' => 5,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Spicy seafood ramen', 
                    'price' => 14, 
                    'ingredients' => 'Spicy soup, mussels, Calamari, Shrimps', 
                    'type' => 'soups',
                    'image' => '7.jpeg',
                    'restaurant_id' => 5,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Miso Ramen', 
                    'price' => 11, 
                    'ingredients' => 'Miso taste soup, Pork mince', 
                    'type' => 'soups',
                    'image' => '8.jpeg',
                    'restaurant_id' => 5,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Red hot Miso Ramen', 
                    'price' => 11, 
                    'ingredients' => 'Spicy miso soup, Pork mince, Veges', 
                    'type' => 'soups',
                    'image' => '1.jpg',
                    'restaurant_id' => 5,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                //soupless ramen
                [
                    'name' => 'Teriyaki Chicken Ramen', 
                    'price' => 10.50, 
                    'ingredients' => 'Noodle, teriyaki chicken, Salad', 
                    'type' => 'soupless ramen',
                    'image' => '2.jpg',
                    'restaurant_id' => 5,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Sesame Cold Ramen', 
                    'price' => 10, 
                    'ingredients' => 'Salad style, BBQ pork, Sesame dressing', 
                    'type' => 'soupless ramen',
                    'image' => '3.jpeg',
                    'restaurant_id' => 5,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Spicy Dry Ramen', 
                    'price' => 9, 
                    'ingredients' => 'Spicy noodle, BBQ pork, Veggies', 
                    'type' => 'soupless ramen',
                    'image' => '4.jpeg',
                    'restaurant_id' => 5,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                //Donburi with rice
                [
                    'name' => 'Katsu Don ', 
                    'price' => 11, 
                    'ingredients' => 'Cooked, Egg, Pork, Chicken', 
                    'type' => 'donburi with rice',
                    'image' => '5.jpeg',
                    'restaurant_id' => 5,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Miso katsu don', 
                    'price' => 11, 
                    'ingredients' => '', 
                    'type' => 'donburi with rice',
                    'image' => '6.jpeg',
                    'restaurant_id' => 5,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'BBQ pork or chicken', 
                    'price' => 11, 
                    'ingredients' => '', 
                    'type' => 'donburi with rice',
                    'image' => '7.jpeg',
                    'restaurant_id' => 5,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Oyako don', 
                    'price' => 11, 
                    'ingredients' => 'Cooked, Egg, Chicken', 
                    'type' => 'donburi with rice',
                    'image' => '8.jpeg',
                    'restaurant_id' => 5,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Teriyaki don', 
                    'price' => 11, 
                    'ingredients' => '', 
                    'type' => 'donburi with rice',
                    'image' => '9.jpeg',
                    'restaurant_id' => 5,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Spicy chicken don', 
                    'price' => 11, 
                    'ingredients' => '', 
                    'type' => 'donburi with rice',
                    'image' => '10.jpeg',
                    'restaurant_id' => 5,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Tofu Don', 
                    'price' => 10, 
                    'ingredients' => 'Chicken, Egg', 
                    'type' => 'donburi with rice',
                    'image' => '11.jpeg',
                    'restaurant_id' => 5,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Prwan tempura don ', 
                    'price' => 10, 
                    'ingredients' => 'Chicken, Egg', 
                    'type' => 'donburi with rice',
                    'image' => '12.jpeg',
                    'restaurant_id' => 5,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Curry Katsu Don', 
                    'price' => 10, 
                    'ingredients' => 'Pork, Chicken', 
                    'type' => 'donburi with rice',
                    'image' => '13.jpeg',
                    'restaurant_id' => 5,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                //Side Dishes
                [
                    'name' => 'Edamame', 
                    'price' => 6, 
                    'ingredients' => 'Soya bean in pod', 
                    'type' => 'side dishes',
                    'image' => '14.jpg',
                    'restaurant_id' => 5,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Takoyaki', 
                    'price' => 6, 
                    'ingredients' => 'Octopus dumpling', 
                    'type' => 'side dishes',
                    'image' => '15.jpeg',
                    'restaurant_id' => 5,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Gyoza', 
                    'price' => 6, 
                    'ingredients' => 'Panfried dumpling withpork & shrimps', 
                    'type' => 'side dishes',
                    'image' => '16.jpeg',
                    'restaurant_id' => 5,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                //BBQ and Pot
                [
                    'name' => 'Chicken and prawn', 
                    'price' => 12, 
                    'ingredients' => '', 
                    'type' => 'BBQ and pot',
                    'image' => '17.jpeg',
                    'restaurant_id' => 5,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Tofu pot', 
                    'price' => 10, 
                    'ingredients' => '', 
                    'type' => 'BBQ and pot',
                    'image' => '1.jpg',
                    'restaurant_id' => 5,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Chiken pot', 
                    'price' => 10, 
                    'ingredients' => '', 
                    'type' => 'BBQ and pot',
                    'image' => '2.jpg',
                    'restaurant_id' => 5,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                // Extras
                [
                    'name' => 'Steamed rice', 
                    'price' => 2, 
                    'ingredients' => '', 
                    'type' => 'extras',
                    'image' => '3.jpeg',
                    'restaurant_id' => 5,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Miso soup', 
                    'price' => 3, 
                    'ingredients' => '', 
                    'type' => 'extras',
                    'image' => '4.jpeg',
                    'restaurant_id' => 5,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                //desserts
                [
                    'name' => 'Green tea and icream', 
                    'price' => 5, 
                    'ingredients' => '', 
                    'type' => 'desserts',
                    'image' => '5.jpeg',
                    'restaurant_id' => 5,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            ]
        );
    }
}
