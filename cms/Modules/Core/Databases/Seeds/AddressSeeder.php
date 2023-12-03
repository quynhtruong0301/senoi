<?php

namespace Cms\Modules\Core\Databases\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create provinces
        foreach (config('province') as $item) {
            DB::table('provinces')->insert([
                'id' => $item[0],
                'name' => $item[1],
                'slug' => ''
            ]);
        }
        // Create districts
        foreach (config('district') as $item) {
            DB::table('districts')->insert([
                'id' => $item[0],
                'province_id' => $item[1],
                'name' => $item[2],
                'slug' => ''
            ]);
        }
        // Create wards
        foreach (config('ward') as $item) {
            DB::table('wards')->insert([
                'id' => $item[0],
                'district_id' => $item[1],
                'name' => $item[2],
                'slug' => ''
            ]);
        }

        // create secret passport
        Artisan::call('passport:install');
    }
}
