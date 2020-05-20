<?php
$users = [
    ['id' => 0, 'name' => 'root'],
    ['id' => 2, 'name' => 'daemon'],
    ['id' => 997, 'name' => 'nginx'],
];

echo 'users count:' . count($users) . PHP_EOL;
echo 'user count:' . count($users[0]) . PHP_EOL;

class CountWu implements Countable
{
    protected $_myCount = 3;
    public function count()
    {
        return $this->_myCount;
    }
}
$obj = new CountWu();
echo 'Class count:' . $obj->count() . PHP_EOL;
echo 'Class implements Countable count:' . count($obj) . PHP_EOL;
