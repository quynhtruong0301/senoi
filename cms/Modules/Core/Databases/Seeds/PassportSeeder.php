<?php

namespace Cms\Modules\Core\Databases\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class PassportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create secret passport
        Artisan::call('passport:install');
    }
}
