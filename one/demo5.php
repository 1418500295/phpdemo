<?php

$a = 2;
if ($a >2){
    echo "a的值大于2";
}else {
    echo "a的值不大于2";
}


switch ($a){
    case 1:
        echo "1";
        break;
    case 2:
        echo "2",PHP_EOL;
        break;
}


while ($a<5){
    echo 2,PHP_EOL;
    $a++;
}


for ($i =0;$i<10;$i++){
    echo $i;

}

//迭代数组
$colors = array(1,2,4,5);
foreach ($colors as $color) {
    echo $color,PHP_EOL;
    
}


?>
