<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Felipe Farias',
            'email' => '190190f@gmail.com',
            'password' => bcrypt('dprnss'),
        ]);
    }
}
