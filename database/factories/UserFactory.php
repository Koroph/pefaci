<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'firstname' => fake()->firstName(),
            'lastname' => fake()->lastName(),
            'email' => fake()->email(),
            'password' => 'password',
            'phone' => fake()->phoneNumber(),
            'activated' => fake()->boolean(),
            'image_path' => null,
            'role' => [
                "ROLE_DASHBOARD_MENU",
                "ROLE_DASHBOARD_SHOW",
                "ROLE_USERS_MENU",
                "ROLE_USERS_SHOW",
                "ROLE_USERS_CREATE",
                "ROLE_USERS_EDIT",
                "ROLE_USERS_DESTROY",
                "ROLE_USERS_AUTHORISATION",
                "ROLE_USERS_TRASH",
                "ROLE_CUSTOMERSs_MENU",
                "ROLE_CUSTOMERSs_SHOW",
                "ROLE_CUSTOMERSs_CREATE",
                "ROLE_CUSTOMERSs_EDIT",
                "ROLE_CUSTOMERSs_DESTROY",
                "ROLE_CUSTOMERSs_TRASH",
                "ROLE_PARTNERS_MENU",
                "ROLE_PARTNERS_SHOW",
                "ROLE_PARTNERS_CREATE",
                "ROLE_PARTNERS_EDIT",
                "ROLE_PARTNERS_DESTROY",
                "ROLE_PARTNERS_TRASH"],
            'remember_token' => hash('sha256', Str::random(80)),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
