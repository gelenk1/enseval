<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'=>'asministrator',
            'email'=>'tri.wahyudi@enseval.com',
            'password'=>bcrypt('123456'),
            'nik'=>'210200129',
            'level'=>'99',
            'phone'=>'08988931715'
        ]);
    }
}
