<?php

namespace Foo\Bar;

include "file1.php";
const FOO = 2;
function foo(){
    echo "foo 2".PHP_EOL;
}

class foo{
    static function staticmethod(){
        echo "file2 method".PHP_EOL;
    }

    function method(){
        echo "非静态方法";
    }
}

echo \Foo\Bar\subspace\FOO.PHP_EOL;

foo();
\Foo\Bar\subspace\foo();

//调用静态方法
foo::staticmethod();
\Foo\Bar\subspace\foo::staticmethod();

$a = new foo();
$a->method();

\Foo\Bar\subspace\foo();

?>
