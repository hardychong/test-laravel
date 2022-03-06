<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Account;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Account>
 */
class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' 		-> $this->faker->name,
			'no'		-> rand(100000000,999999999);
			'note'		-> $this->str(30);
			'create_at'	-> now();
			'update_at'	-> now();
        ];
    }
}