<?php
$redis = new Redis();
$redis->connect('127.0.0.1', 6379);
$redis->auth("wuweiit");

function rangeCache($size, $obj)
{
    for ($i = 1; $i < $size; $i++) {
        $obj->set($i, microtime_float());
    }
}

function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float) $usec + (float) $sec);
}

$start_time = microtime_float();
rangeCache(1000, $redis);
echo microtime_float() - $start_time . PHP_EOL;
