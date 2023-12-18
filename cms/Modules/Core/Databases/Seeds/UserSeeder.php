<?php

namespace Cms\Modules\Core\Databases\Seeds;

use Cms\Modules\Core\Models\Pet;
use Cms\Modules\Core\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()
            ->count(10)
            ->has(Pet::factory()->count(10))
            ->create();
    }
}
