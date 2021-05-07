<?php

//require "../vendor/autoload.php";
use PHPUnit\Framework\TestCase;
use base\bin;
include "../common/HttpMain.php";
include "../common/FileUtil.php";
class DemoTest extends TestCase
{
    public function test01(){
        $data = bin\FileUtil::getData("a.json",0);
        $rs = HttpMain::doGet("http",$data);
        self::assertEquals("success",json_decode($rs,true)["Msg"]);
        self::assertTrue(json_decode($rs,true)["Code"] === 1 and
        json_decode($rs,true)["Msg"] === "success");




    }

    public function  test02(){
        self::assertEquals(2,2);
    }
}