<?php

class Md5Util {

    public static function md5Tool($str): string
    {
        return md5($str);
//        $array = array();
//        $array["code"] = 200;
//        $array["result"] = $encrypt_str;
//        return json_encode($array);
    }

    public static function getTimeStamp(): string
    {
        return (string)time()*1000;
    }

    public static function sortData($data): string
    {
        $a = array();
        foreach ($data as $key=> $datum) {
            array_push($a,$key);

        }
        sort($a);
        $b = "";
        foreach ($a as $item) {
            $b .= $item."=".$data[$item]."&";

        }
        return substr($b,0,strlen($b)-1);

    }


}

//$a = array("name"=>"make","age"=>12,"sex"=>"male");
//echo Md5Util::sortData($a).PHP_EOL;
//echo Md5Util::getTimeStamp();


?>
