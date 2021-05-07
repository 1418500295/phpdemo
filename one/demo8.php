<?php
namespace makeTest;
/**
 * == 比较值相等，不比较类型
 * === 比较值和类型
 */

echo "当前的行号是".__LINE__.PHP_EOL;
echo "当前的文件绝对路径是".__FILE__.PHP_EOL;
echo "当期那文件的目录是".__DIR__.PHP_EOL;
function test(){
    echo "当前函数名称是".__FUNCTION__.PHP_EOL;
}
test();

class Demo{
    function one(){
        echo "当前类的名称是".__CLASS__.PHP_EOL;
    }
}
$a = new Demo();
$a->one();
echo "当前命名空间名称是".__NAMESPACE__.PHP_EOL;
?>
