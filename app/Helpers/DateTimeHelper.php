<?php

use Carbon\Carbon;

function getFormatDate($date)
{
    return date('d.m.Y', strtotime($date));
}

function getRandomDate()
{
    $till = Carbon::now()->format('Y-m-d');
    $from = Carbon::now()->subDays(14)->startOfWeek()->format('Y-m-d');

    $date = rand(strtotime($from), strtotime($till));

    return date('Y-m-d H:i:s', $date);
}
