<?php

namespace Cms\Modules\Core\Databases\Seeds;

use Cms\Modules\Core\Models\Attribute;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $attributes = [
            'màu lông' => [
                [
                    'value' => 'red',
                    'display_name' => 'Đỏ'
                ],
                [
                    'value' => 'green',
                    'display_name' => 'Xanh lá'
                ],
                [
                    'value' => 'black',
                    'display_name' => 'Đen'
                ],
            ],
            'quốc tịch' => [
                [
                    'value' => 'vietnam',
                    'display_name' => 'Việt Nam'
                ],
                [
                    'value' => 'england',
                    'display_name' => 'Anh'
                ],
                [
                    'value' => 'russia',
                    'display_name' => 'Nga'
                ],
            ],
            'giới tính' => [
                [
                    'value' => 'male',
                    'display_name' => 'Đực'
                ],
                [
                    'value' => 'female',
                    'display_name' => 'Cái'
                ],
            ],
        ];

        foreach ($attributes as $key => $attribute) {
            foreach ($attribute as $item) {
                $data = [
                    'type' => $key,
                    'value' => $item['value'],
                    'display_name' => $item['display_name']
                ];

                Attribute::create($data);
            }
        }
    }
}
