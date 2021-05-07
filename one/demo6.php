<?php

function writeMsg(){
    echo "hello world",PHP_EOL;
}

writeMsg();


function getName($fName){
    echo "结果是".$fName,PHP_EOL;

}

getName("make");



function getAge($age): string
{
    return $age.PHP_EOL;
}

echo getAge(12);
?>
