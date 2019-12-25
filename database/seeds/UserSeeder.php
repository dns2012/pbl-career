<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@pblcareer.com',
            'password' => Hash::make('pblcareer'),
            'role' => 1,
            'avatar' => 'https://pngimage.net/wp-content/uploads/2018/05/default-user-profile-image-png-7.png'
        ]);
    }
}