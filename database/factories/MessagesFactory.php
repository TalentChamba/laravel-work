<?php

namespace Database\Factories;

use App\Models\Messages;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class MessagesFactory extends Factory
{

    public function definition()
    {
        return [
            'message' => $this->faker->text,
            'created_at' => $this->faker->dateTimeBetween('-5 years', now()),
            'updated_at' => \Carbon\Carbon::now()

        ];
    }
}
