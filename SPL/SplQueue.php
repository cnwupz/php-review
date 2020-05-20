<?php
$queue = new SplQueue();
$managers = ['administrator', 'root', 'support', 'supadmin'];

for ($i = 0; $i < count($managers); $i++) {
    $queue->enqueue($managers[$i]);
}

if ($queue->count() > 0) {
    print_r($queue);
    echo "Bottom: " . $queue->bottom() . PHP_EOL;
    echo "Top: " . $queue->top() . PHP_EOL;
}

$queue->offsetSet(0, 'admin');
print_r($queue);

$queue->offsetSet($queue->count() - 1, 'sa');
print_r($queue);

$queue->rewind();
echo "Current: " . $queue->current() . PHP_EOL . PHP_EOL;

while ($queue->valid()) {
    echo $queue->key() . "=>" . $queue->current() . PHP_EOL;
    $queue->next();
}
print_r($queue);

echo "Dequeue: " . $queue->dequeue() . PHP_EOL;
echo "Dequeue: " . $queue->dequeue() . PHP_EOL;
echo "Dequeue: " . $queue->dequeue() . PHP_EOL;

print_r($queue);
