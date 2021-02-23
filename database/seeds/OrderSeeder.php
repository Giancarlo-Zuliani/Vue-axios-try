<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Dish;
use App\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Order::class, 150)
           ->make()
           ->each(function($ord){
               $user = User::inRandomOrder() -> first();
               $ord -> user() -> associate($user);
               
               $ord -> save();
               $dish = Dish::inRandomOrder() -> limit(rand(5,15))->get();
               $ord -> dishes()-> attach($dish);

            });

        /* factory(Order::class,150)->create()
           ->each(function($ord){
           }); */

            
        
    }  
}
