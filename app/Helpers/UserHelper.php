<?php

use App\Models\User;
use Illuminate\Support\Facades\DB;

function getFormatUser($name)
{
    $fio = explode(' ', $name);

    $first_name = $fio[0];
    $last_name = $fio[2];

    return $first_name . ' ' . $last_name;
}

function getRandomUserId()
{
    return User::orderBy(DB::raw('RAND()'))->first()->id;
}
