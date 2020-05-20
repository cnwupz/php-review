<?php
use SplDoublyLinkedList as SplList;
$dll = new SplList();
$arrs = [1, 2, 3, 4, 5, 6, 7, 8, 9];

for ($i = 0; $i < count($arrs); $i++) {
    $dll->add($i, $arrs[$i]);
}

for ($i = 1; $i < count($arrs); $i++) {
    $dll->push($i + 10);
}

$dll->unshift("wuweiit");

if (!$dll->isEmpty()) {
    print_r($dll);
    echo "Bottom: " . $dll->bottom() . PHP_EOL;
    echo "Top: " . $dll->top() . PHP_EOL;
    $dll->rewind(); //bottom处节点
    $dll->next(); // 下一个节点
    $dll->prev(); //  上一个节点
    echo 'Count: ' . $dll->count() . PHP_EOL;
    echo 'Current: ' . $dll->current() . PHP_EOL;
    echo 'Valid: ' . $dll->valid() . PHP_EOL;
}

for ($i = $dll->count(); $i > 0; $i--) {
    echo 'Pop: ' . $dll->pop() . PHP_EOL;
}
