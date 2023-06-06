<?php

use Illuminate\Database\Seeder;
use App\Courier;

class CourierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Courier::create([
            'id'=>1,
            'courier_name' => 'JNER',
            'shipping_cost' => 6000
        ]);
    }
}
