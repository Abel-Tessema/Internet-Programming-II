<?php

// Set the default time-zone to that of Africa, Addis Ababa
date_default_timezone_set('Africa/Addis_Ababa');

// The number of seconds elapsed since Jan 1, 1970 00:00:00
echo 'Current timestamp: ' . time() . ' seconds';
echo '<br> <br>';

// Return the timestamp of ten days ago, and print it
$tenDaysAgo = strtotime('-10 days');
echo 'Ten days ago: ' . date('l jS \of F Y', $tenDaysAgo);
echo '<br> <br>';

// Return the timestamp of Jul 11, 2016 22:10:16, and print it
$datetime = mktime(22, 10, 16, 7, 11, 2016);
echo date('Y-m-d g:i:s A', $datetime);
echo '<br> <br>';

// Calculate the number of days until this year's Christmas
$currentYear = date('Y');
$christmas = strtotime("Dec 25 $currentYear");
$secondsUntilChristmas = $christmas - time();
$secondsInADay = 86_400;
$daysUntilChristmas = floor($secondsUntilChristmas / $secondsInADay);
echo "There are $daysUntilChristmas days until this year's Christmas.";












//var_dump(date('r', strtotime('yesterday')));
//echo '<br>';
//var_dump(strtotime('today'));
//time();

//function abebe(?int $x = 10) {
//    echo 'Abebe!';
//}

//abebe();

//var_dump(mktime(1, 2, 10, 12, 20));

