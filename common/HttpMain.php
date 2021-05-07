<?php

require "../vendor/autoload.php";
class HttpMain {

//    设置header
//    $client = new GuzzleHttp\Client(['headers'=>['referer'=>'https://www.baidu,com']]);
    public static function doGetNoParams($url){
        $client = new GuzzleHttp\Client();
        $res = null;
        try {
            $res = $client->request("GET", $url);
        } catch (\GuzzleHttp\Exception\GuzzleException $e) {
        }
        echo "响应码: ".$res->getStatusCode().PHP_EOL;
        return $res->getBody()->getContents().PHP_EOL;
    }
    public static function doGet($url,$data): string
    {
        $client = new GuzzleHttp\Client();
        $res = null;
        try {
            $res = $client->request("GET", $url, $data);
        } catch (\GuzzleHttp\Exception\GuzzleException $e) {
        }
        echo "响应码:".$res->getStatusCode().PHP_EOL;
        return $res->getBody()->getContents().PHP_EOL;
    }

    public static function doPost($url,$data): string {
        $client = new GuzzleHttp\Client();
        $res = null;
        try {
            $res = $client->request("POST", $url, $data);
        } catch (\GuzzleHttp\Exception\GuzzleException $e) {
        }
        echo "响应码:".$res->getStatusCode().PHP_EOL;
        return $res->getBody()->getContents().PHP_EOL;
    }
}

?>
