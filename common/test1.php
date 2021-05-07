<?php

use base\bin\FileUtil;

include "FileUtil.php";
$a = FileUtil::getData("a.json",0)["TypeId"];
echo $a.PHP_EOL;
$e = [1,4,45];
var_dump($e);
//$b = array("name"=>"make","age"=>12,"sex"=>"male");
$b = ["name"=>["make"=>"13"],"age"=>12];
$c = json_encode($b);
echo $c;
var_dump($c);
?>
