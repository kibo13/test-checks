<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CheckFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user   = getRandomUserId();
        $photo  = 'check.png';
        $type   = rand(0, 1);
        $code   = getCodeCheck($type);
        $status = rand(0, 1);

        return [
            'user_id'   => $user,
            'photo'     => $photo,
            'type'      => $type,
            'code'      => $code,
            'status'    => $status
        ];
    }
}
