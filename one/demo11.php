<?php

$a = array("name"=>"make","age"=>12,"sex"=>"male");
foreach ($a as $key=> $item) {
    echo $key;
}

echo PHP_EOL;
$b = array(1,23,4);
array_push($b,5);
foreach ($b as $item) {
    echo $item.PHP_EOL;
}
?>
