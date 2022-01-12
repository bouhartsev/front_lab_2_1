<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user1 = new User;
        $user1->name = 'Matvey';
        $user1->email = env("ADMIN_EMAIL", 'admin@example.com');
        $user1->password = env("ADMIN_PASSWORD", Hash::make(123456));
        $user1->role_id = 4; // admin
        $user1->save();

        $user2 = new User;
        $user2->name = 'Example Customer';
        $user2->email = 'customer@example.com';
        $user2->password = Hash::make(123456);
        $user2->role_id = 1; // customer
        $user2->save();
        
    }
}