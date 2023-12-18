<?php

namespace Cms\Modules\Core\Databases\Seeds;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            SampleAuthSeeder::class,
            AddressSeeder::class,
            PassportSeeder::class,
            CategorySeeder::class,
            AttributeSeeder::class,
            UserSeeder::class
        ]);
    }
}
