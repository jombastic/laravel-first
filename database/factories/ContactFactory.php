<?php

namespace Database\Factories;

use App\Models\Contact;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail()
        ];
    }

    public function vip() {
        return $this->state(function (array $attributes) {
            return [
                'vip' => true,
                'company' => $this->faker->company(),
            ];
        });
    }
}
