<?php
$date = strtotime("July 16, 2021 3:00 PM");
$remaining = $date - time();

$days_remaining = floor($remaining / 86400);
$hours_remaining = floor(($remaining % 86400) / 3600);
echo "There are $days_remaining days and $hours_remaining hours left";