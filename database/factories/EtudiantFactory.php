<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
             "matricule" => $this->faker->swiftBicNumber,
              "nom" => $this->faker->lastName,
              "prenom" => $this->faker->lastName,
               'email' => $this->faker->unique()->safeEmail(),
               "cycle" => rand(1,2),
               "niveau" => rand(1,5),


        ];
    }
}
