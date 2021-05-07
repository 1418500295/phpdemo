<?php
namespace Foo\Bar\subspace;
//use bin\bash as that;   // 引入了 bin\bash 命名空间，并定义了个别名that



include "file3.php";

const FOO = 1;
function foo(){
    echo "foo 1".PHP_EOL;
}
class foo{
    static function staticmethod(){
        echo "file1 method".PHP_EOL;
    }
}

mine2();


?>