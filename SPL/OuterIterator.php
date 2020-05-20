<?php
class OuterImpl extends IteratorIterator
{
    public function current()
    {
        return parent::current() . '_tail';
    }

    public function key()
    {
        return 'pre_' . parent::key();
    }
}

$iterator = new ArrayIterator(['root', 'daemon', 'nginx']);
$outerIterator = new OuterImpl($iterator);

echo "Iterator Foreach:" . PHP_EOL;
foreach ($iterator as $key => $name) {
    echo $key . ':' . $name . PHP_EOL;
}

echo "OuterIterator Foreach:" . PHP_EOL;
foreach ($outerIterator as $key => $name) {
    echo $key . ':' . $name . PHP_EOL;
}
