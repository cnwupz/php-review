<?php
echo time() . PHP_EOL;
echo strtotime('2020-05-20 13:14:00') . PHP_EOL;
echo date("Y-m-d H:i:s", strtotime('2020-05-20 13:14:00')) . PHP_EOL;

function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float) $usec + (float) $sec);
}

$time_start = microtime_float();

usleep(100);

$time_end = microtime_float();
$time = $time_end - $time_start;

echo $time . ' seconds';
