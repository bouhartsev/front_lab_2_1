<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Service;
use App\Models\ServiceComment;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::factory()->count(10)->
        has(ServiceComment::factory()->count(3), 'comments')->create();
    }
}
