<?php

declare(encoding='UTF-8'); //定义多个命名空间和不包含在命名空间中的代码

//声明多个命名空间
namespace one{
    const a = 1;
}
namespace two{
    const b = 1;
}

//全局代码，使用namespace 不带名称定义
namespace {
    const c = 1;

}

namespace MyProject\Sub\Level{
    const COON = 1;
}
//上面的例子创建了常量MyProject\Sub\Level\COON

?>

