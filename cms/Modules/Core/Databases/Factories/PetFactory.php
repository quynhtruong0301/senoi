<?php

namespace Cms\Modules\Core\Databases\Factories;

use Cms\Modules\Core\Models\Category;
use Cms\Modules\Core\Models\District;
use Cms\Modules\Core\Models\Pet;
use Cms\Modules\Core\Models\Province;
use Cms\Modules\Core\Models\User;
use Cms\Modules\Core\Models\Ward;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PetFactory extends Factory
{
    protected $model = Pet::class;

    public function definition()
    {
        $province = Province::all()->random();
        $district = District::all()->random();
        $ward = Ward::all()->random();
        $user = User::all()->random();
        $category = Category::all()->random();

        return [
            'user_id' => $user->id,
            'category_id' => $category->id,
            'province_id' => $province->id,
            'district_id' => $district->id,
            'ward_id' => $ward->id,
            'name' => $this->faker->name(),
            'price' => $this->faker->numberBetween(100000, 100000000),
            'thumbnail' => 'https://www.thetimes.co.uk/money-mentor/wp-content/uploads/2022/01/GettyImages-512366437.jpg',
            'description' => $this->faker->text(),
            'sold' => 0,
            'favorite' => 100,
            'free' => 0,
        ];
    }
}
