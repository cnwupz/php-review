<?php
date_default_timezone_set('PRC');
$iterator = new FileSystemIterator('.');
echo "FileSystemIterator Foreach:" . PHP_EOL;
foreach ($iterator as $value) {
    printf("%s\t%s\t%8s\t%s\n",
        date('Y-m-d H:i:s', $value->getMtime()),
        $value->isDir() ? '<DIR>' : '',
        number_format($value->getSize()),
        $value->getFileName()
    );
}
