<?php
date_default_timezone_set("PRC");
$readme = new SplFileInfo('../readme.md');
echo "Create Time: " . date('Y-m-d H:i:s', $readme->getCTime()) . PHP_EOL;

echo "Create Time: " . date('Y-m-d H:i:s', $readme->getMTime()) . PHP_EOL;

echo "Size : " . $readme->getSize() . ' bytes' . PHP_EOL;

$readmeDetail = $readme->openFile("r");
while ($readmeDetail->valid()) {
    echo $readmeDetail->fgets();
}
$readmeDetail = null;
$readme = null;
