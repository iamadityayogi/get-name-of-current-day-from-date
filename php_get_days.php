<?php
////get all days name from date range
$from_date = '01-07-2022';
$to_date = '13-07-2022';
$from_date = new DateTime($from_date);
$to_date = new DateTime($to_date);
for ($date = $from_date; $date <= $to_date; $date->modify('+1 day')) {
    echo $date->format('l') . "\n";
}
// OUTPUT:- "Friday Saturday Sunday Monday Tuesday Wednesday Thursday Friday Saturday Sunday Monday Tuesday Wednesday"

////get name of current day from date
$date = '17-07-2022';
echo date('D', strtotime($date));  //OUTPUT:- Tue
echo date('l', strtotime($date));  //OUTPUT:- Tuesday