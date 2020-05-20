<?php
$user = [
    'username' => 'EvanWu',
    'email' => 'wuweiit@icloud.com',
    'domain' => 'wuweiit.com',
    'gitee' => 'https://gitee.com/wupz',
];

echo PHP_EOL . "function foreach:" . PHP_EOL;
foreach ($user as $key => $value) {
    echo $key . ':' . $value . PHP_EOL;
}

$userArrayObject = new ArrayObject($user);

$interator = $userArrayObject->getIterator();

echo PHP_EOL . "interator foreach:" . PHP_EOL;
foreach ($interator as $key => $value) {
    echo $key . ':' . $value . PHP_EOL;
}

echo PHP_EOL . "interator while:" . PHP_EOL;
$interator->rewind();
while ($interator->valid()) {
    echo $interator->key() . ':' . $interator->current() . PHP_EOL;
    $interator->next();
}

echo PHP_EOL . "interator seek:" . PHP_EOL;
$interator->rewind();
if ($interator->valid()) {
    $interator->seek(1);
    while ($interator->valid()) {
        echo $interator->key() . ':' . $interator->current() . PHP_EOL;
        $interator->next();
    }
}

echo PHP_EOL . "interator ksort foreach:" . PHP_EOL;
$interator->ksort();
foreach ($interator as $key => $value) {
    echo $key . ':' . $value . PHP_EOL;
}

echo PHP_EOL . "interator asort foreach:" . PHP_EOL;
$interator->asort();
foreach ($interator as $key => $value) {
    echo $key . ':' . $value . PHP_EOL;
}
