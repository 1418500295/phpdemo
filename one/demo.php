<?php

$x = 1;
echo $x;
//获取变量的类型和值
var_dump($x);

$a = 10.23;
echo $a;
var_dump($a);

$b = array("name","age","sex");
var_dump($b);

class Car{
    var $color;
    function Car($color="red"){
        $this->color = $color;
    }
    function what_color(){
        return $this->color;
    }
}

$c = null;
var_dump($c);

echo $x.PHP_EOL,$a,PHP_EOL,$c;




?>