<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Web Master',
            'email' => 'webmaster@edumis.com',
            'password' => Hash::make('$$web@ict2'),
            'role_id' => 2
        ]);
    }
}
