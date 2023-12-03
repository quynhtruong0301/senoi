<?php

namespace Cms\Modules\Core\Databases\Seeds;

use Cms\Modules\Core\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Mèo',
                'slug' => 'meo-meo',
                'virtual_image' => 'https://www.petcity.vn/media/news/927_chu_meo_hoan_hao_nhat_1.jpg',
                'real_image' => 'https://www.petcity.vn/media/news/927_chu_meo_hoan_hao_nhat_1.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'public' => 1
            ],
            [
                'name' => 'Chó',
                'slug' => 'gau-gau',
                'virtual_image' => 'https://www.petcity.vn/media/news/927_chu_meo_hoan_hao_nhat_1.jpg',
                'real_image' => 'https://www.petcity.vn/media/news/927_chu_meo_hoan_hao_nhat_1.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'public' => 1
            ],
            [
                'name' => 'Cá',
                'slug' => 'ca-ca',
                'virtual_image' => 'https://www.petcity.vn/media/news/927_chu_meo_hoan_hao_nhat_1.jpg',
                'real_image' => 'https://www.petcity.vn/media/news/927_chu_meo_hoan_hao_nhat_1.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'public' => 1
            ],
            [
                'name' => 'Chim',
                'slug' => 'chim-chim',
                'virtual_image' => 'https://www.petcity.vn/media/news/927_chu_meo_hoan_hao_nhat_1.jpg',
                'real_image' => 'https://www.petcity.vn/media/news/927_chu_meo_hoan_hao_nhat_1.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'public' => 1
            ],
            [
                'name' => 'Thỏ',
                'slug' => 'tho-tho',
                'virtual_image' => 'https://www.petcity.vn/media/news/927_chu_meo_hoan_hao_nhat_1.jpg',
                'real_image' => 'https://www.petcity.vn/media/news/927_chu_meo_hoan_hao_nhat_1.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'public' => 1
            ]
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }

    }
}
