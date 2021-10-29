<?php

use Carbon\Carbon;
use Illuminate\Support\Str;

function getTypeCheck()
{
    $current_hour = Carbon::now()->addHour(6)->format('H');

    // bonus check
    if ($current_hour % 2 == 0) {
        return 1;
    }
    // regular check
    else {
        return 0;
    }
}

function getCodeCheck($type)
{
    if ($type == 1) {
        return strtoupper(Str::random(8));
    }
}

function getFormatCode($code)
{
    $output = '';

    $n = 0;

    while ($n < 8) {
        if ($n == 4) {
            $output .= '-' . $code[$n];
        } else {
            $output .= $code[$n];
        }

        $n = $n + 1;
    }

    return $output;
}

function getActiveCheck($date, $code)
{
    $last_week    = Carbon::create($date)->addHour(6)->startOfWeek();
    $current_week = Carbon::now()->addHour(6)->startOfWeek();

    if ($last_week == $current_week) {
        return getFormatCode($code);
    } else {
        return 'Не учавствует на этой неделе';
    }
}

function getStatusCheck($photo)
{
    return is_null($photo) ? 0 : 1;
}
