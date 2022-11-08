<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class AdminAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
            'name' => 'Administrator',
            'email' => 'TagnipaAdmin@tagnipa.com',
            'password' => bcrypt('administrator852456'),
            'profile_pic' => '1665955579.png',
            'role' => 0
            ],
        ];
        foreach($user as $users)
        {
            User::create($users);
        }
    }
}
