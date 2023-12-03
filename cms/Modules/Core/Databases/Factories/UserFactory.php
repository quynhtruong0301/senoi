<?php

namespace Cms\Modules\Core\Databases\Factories;

use Cms\Modules\Core\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        // TODO: Implement definition() method.
        return [
            'name' => $this->faker->userName(),
            'avatar' => $this->faker->imageUrl(),
            'email' => $this->faker->unique()->email(),
            'phone' => $this->faker->unique()->phoneNumber(),
            'password' => bcrypt(00000000)
        ];
    }
}
