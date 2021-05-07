<?php

include "./Demo.php";

/**
 * Class Info
 * 如果访问的类成员变量或方法被static或const修饰，那么访问方式为::，否则用->
 * 如果从类的内部访问被static或const修饰的变量和方法，用self，否则用$this
 */
class Info implements Demo
{
    var int $c = 1;
    function run($times)
    {
        echo $times;
        // TODO: Implement run() method.
    }

    function sing($name)
    {
        // TODO: Implement sing() method.
        return $name;


    }


}
$a = new Info();
$a->run(1);
echo $a->sing("make");
//echo Demo::SEX;
echo Info::SEX;


