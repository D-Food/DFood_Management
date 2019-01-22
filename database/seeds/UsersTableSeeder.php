<?php

use Illuminate\Database\Seeder;

class U0sersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Leaphea",
            'email' =>'leaphea@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
