<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UsagersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = ["etudiant_informatique",'professeur_informatique','autre'];
        return [
            'nom'=>fake()->name(),
            'matricule'=>fake()->numberBetween(1000000,9999999),
            'categorie'=>$categories[fake()->numberBetween(0,2)],
            'password'=>Hash::make('password1234'),
        ];
    }
}
