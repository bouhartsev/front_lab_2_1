<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = ['customer','employee','moderator','admin'];
        foreach ($names as $name) {
            $userRole = new Role();
            $userRole->name = $name;
            $userRole->save();
        }
    }
}
