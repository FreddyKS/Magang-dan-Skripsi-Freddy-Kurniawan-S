<?php

use Illuminate\Database\Seeder;
use App\Flower;

class FlowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Flower::create([
            'flower_id' => 1,
            'flower_name' => 'Flower1',
            'flower_description' => 'This is a flower produced by earth, it has an excruciatingly good smell',
            'flower_price' => 20000,
            'flower_type' => 'Evilweiss',
            'flower_stock' => 18,
            'flower_image' => 'storage/img/Flower1.png'
        ]);
    }
}
