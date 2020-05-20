<?php
$ArrayIteratorA = new ArrayIterator(['administrator', 'root', 'support', 'supadmin']);
$ArrayIteratorB = new ArrayIterator(['admin', 'sa']);
$iterator = new AppendIterator();

echo "AppendIterator Append Foreach:" . PHP_EOL;
$iterator->append($ArrayIteratorA);
$iterator->append($ArrayIteratorB);

foreach ($iterator as $key => $value) {
    echo $key . ':' . $value . PHP_EOL;
}
