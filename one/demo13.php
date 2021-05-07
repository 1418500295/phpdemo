<?php


class demo13
{
    static function one(){
        echo "one";
    }

    function two(){
        echo "two";
        self::one();
        $this->four();
    }

    static function three(){

    }
    function four(){
        echo "four";
    }


}
$a = new demo13();
//$a->two();
//demo13::one();
demo13::three();