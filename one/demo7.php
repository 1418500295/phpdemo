<?php
$a = array(12,42,5,67);
//echo $a[0],PHP_EOL;

$c = count($a);
for ($i=0;$i<$c;$i++){
    echo $a[$i],PHP_EOL;
}

foreach ($a as $item) {
    echo $item,PHP_EOL;
}

sort($a); //按照升序排序
foreach ($a as $item) {

    echo $item;

}
echo PHP_EOL;
rsort($a);  //降序排序
foreach ($a as $item) {
    echo $item;

}
/**
 * asort 按照值对数组进行升序排序
 * arsort 按照值对数组进行降序排序
 * ksort 按照键对数组进行升序排序
 * krsort 按照键对数组进行降序排序
 */
echo PHP_EOL;
$b = array("name"=>12,"age"=>5,"sex"=>18);
krsort($b);
foreach ($b as $item => $value) {
    echo "key是".$item."  value是".$value.PHP_EOL;
}


?>
