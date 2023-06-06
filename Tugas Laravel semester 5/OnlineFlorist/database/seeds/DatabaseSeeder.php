<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        $this->call(GuestSeeder::class);
        $this->call(FlowerSeeder::class);
        $this->call(CourierSeeder::class);
        $this->call(FlowerTypeSeeder::class);
        //$this->call(CartSeeder::class);
        //$this->call(Cart2Seeder::class);
        //$this->call(TransactionHistorySeeder::class);
    }
}
