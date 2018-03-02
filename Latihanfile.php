<?php 

$kebaca=true;
$angka=0;
$tandafile=1;

$directory = new DirectoryIterator(__DIR__);
$num = 0;
foreach ($directory as $fileinfo) {
    if ($fileinfo->isFile()) {
        if($fileinfo->getExtension() == 'txt')
            $num++;
    }
}
echo $num;
?>