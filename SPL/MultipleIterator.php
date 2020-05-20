<?php
$iteratorID = new ArrayIterator([0, 2, 997]);
$iteratorName = new ArrayIterator(['root', 'daemon', 'nginx']);
$iteratorGroup = new ArrayIterator(['root', 'daemon', 'nginx']);

$linuxMultipleIterator = new MultipleIterator(MultipleIterator::MIT_KEYS_ASSOC);

$linuxMultipleIterator->attachIterator($iteratorID, 'id');
$linuxMultipleIterator->attachIterator($iteratorName, 'name');
$linuxMultipleIterator->attachIterator($iteratorGroup, 'group');

echo "MultipleIterator attachIterator foreach" . PHP_EOL;

foreach ($linuxMultipleIterator as $user) {
    print_r($user);
}
