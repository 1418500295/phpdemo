<?php
namespace base\bin;
class FileUtil {

    public static function getData($fileName,$caseIndex)
    {
        $dir = dirname(getcwd());
        $files = $dir."/testdata/".$fileName;
        $data = null;
        if (file_exists($files)){
            $fp = fopen($files,'r');
            $str1 = fread($fp,filesize($files));
            $data = json_decode($str1,true);

        }
        return $data[$caseIndex];


}
}


?>
