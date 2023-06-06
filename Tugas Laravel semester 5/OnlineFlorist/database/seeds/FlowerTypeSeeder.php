<?php

use Illuminate\Database\Seeder;
use App\FlowerType;

class FlowerTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        FlowerType::create([
            'id' => 1,
          'flower_type'  => 'Evilweiss'
        ]);
    }
}
