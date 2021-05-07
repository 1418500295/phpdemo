<?php


class demo10
{
    //成员变量
    var $url;
    var $title;

    /**
     * demo10 constructor.
     * @param $url
     * @param $title
     */
    //构造函数
    public function __construct($url, $title)
    {
        $this->url = $url;
        $this->title = $title;
        echo "构造函数".PHP_EOL;
    }


    function setUrl($par){
        $this->url = $par;
    }
    function getUrl(){
        echo $this->url.PHP_EOL;
    }

    function setTitle($par){
        $this->title = $par;

    }
    function getTitle(){
        echo $this->title.PHP_EOL;
    }


    //析构函数(destructor) 与构造函数相反，当对象结束其生命周期时
    //（例如对象所在的函数已调用完毕），系统自动执行析构函数
    function __destruct()
    {
        echo "销毁";
    }




}

$a = new demo10("111","马克");
$a->setUrl("111");
$a->getUrl();