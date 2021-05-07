<?php

use base\bin;

include "../common/FileUtil.php";
include "../common/HttpMain.php";
include "../common/Md5Util.php";
$data = bin\FileUtil::getData("a.json",0);
$e = httpMain::doGet("http:",$data);
echo $e;
//$a = ["AgentId"=>,"UserId"=>,"ts"=>Md5Util::getTimeStamp(),
//    "Key"=>Md5Util::md5Tool("")];
//echo $a["Key"].PHP_EOL;
//$sign = strtoupper(Md5Util::md5Tool(Md5Util::sortData($a)));
//$b = ["AgentId"=>,"UserId"=>,"ts"=>Md5Util::getTimeStamp(),
//    "sign"=>$sign];
//echo $b["sign"].PHP_EOL;
//echo HttpMain::doGet("http",$b).PHP_EOL;

//$a = array("name"=>"make","age"=>12);
//echo $a["name"];

?>
