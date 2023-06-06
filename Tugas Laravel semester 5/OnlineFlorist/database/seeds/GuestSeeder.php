<?php

use Illuminate\Database\Seeder;
use App\Guest;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Guest::create([
        'email'=>'admin@admin.com',
        'name' =>'admin',
        'password'=>'1Ab23579',
        'phone_number'=>'087880197607',
        'gender'=>'Male',
        'address' => 'Sakto street no.2 in the middle of the night I only havensomething to blblb',
        'image' => 'storage/img/admin.png'
        ]);
    }
}
