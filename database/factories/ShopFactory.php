<?php

namespace Database\Factories;

use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class ShopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'role_id'=>Role::all()->random()->id,
            'name'=>$this->faker->name(),
            'email'=>$this->faker->unique()->safeEmail(),
            'phone_number'=>$this->faker->phoneNumber(),
            'address'=>$this->faker->address(),
            'password'=>Hash::make(123123)
        ];
    }
}
