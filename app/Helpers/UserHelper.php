<?php

use App\Models\User;
use Illuminate\Support\Facades\DB;

function getFormatUser($name)
{
    $fio = explode(' ', $name);

    $count = count($fio);

    if ($count > 1) {
        $first_name = $fio[0];
        $last_name = $fio[2];

        return $first_name . ' ' . $last_name;
    } else {
        $first_name = $fio[0];

        return $first_name;
    }
}

function getRandomUserId()
{
    return User::orderBy(DB::raw('RAND()'))->first()->id;
}
