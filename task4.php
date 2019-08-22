<?php
$array = [
        "ru" => [
           1 => "понедельник",
            2 => "вторник",
            3 => "среда",
            4 => "четверг",
            5 => "пятница",
            6 => "суббота",
            7 => "воскресенье"

        ],
        "en" => [
            1 => "monday",
            2 => "tuesday",
            3 => "wednesday",
            4 => "thursday",
            5 => "friday",
            6 => "saturday",
            7 => "sunday"
        ]

];



print_r($array[$_GET['lang']][$_GET['day']]);


