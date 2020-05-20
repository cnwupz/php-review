<?php
$stack = new SplStack();

$arrs = ['administrator', 'root', 'support', 'supadmin'];
for ($i = 0; $i < count($arrs); $i++) {
    $stack->push($arrs[$i]);
}

if (!$stack->isEmpty()) {
    echo "Bottom: " . $stack->bottom() . PHP_EOL;
    echo "Top: " . $stack->top() . PHP_EOL;
    print_r($stack);

    $stack->offsetSet($stack->count() - 1, 'admin');
    $stack->offsetSet(0, 'sa');
    print_r($stack);

    $stack->rewind();
    echo PHP_EOL . "Current: " . $stack->current() . PHP_EOL;
    $stack->next();
    echo "Current: " . $stack->current() . PHP_EOL . PHP_EOL;

    $stack->rewind();
    while ($stack->valid()) {
        echo $stack->key() . '=>' . $stack->current() . PHP_EOL;
        $stack->next();
    }

    $stack->rewind();
    $pop = $stack->pop();
    echo PHP_EOL . "Poped Object: " . $pop . PHP_EOL;
    print_r($stack);
}
