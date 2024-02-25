<?php
require '/var/www/html/vendor/autoload.php';
use Carbon\Carbon;
header("Content-Type: text/plain");

$birthday = Carbon::create(2024, 3, 1, 10, 0, 0);

$currentDate = Carbon::now();

$daysUntilBirthday = $currentDate->diffInDays($birthday, false);

echo "Days until your next birthday in 2024: $daysUntilBirthday days";



?>