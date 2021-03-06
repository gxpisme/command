<?php
/**
 * 命令的脚本
 * @author xpisme 2017-01-08
 * @mail gxpisme@gmail.com
 * @wechat gxpisme
 */

Script::run($argv);
echo PHP_EOL;

class Script {

    public static function run($argv) {
        if (3 > count($argv)) {
            print_r($argv);
            echo '缺少参数';
            return false;
        }
        $fun = $argv[1];
        $param = $argv[2];
        self::$fun($param);
    }

    public static function enurl($str) {
        print_r(urlencode($str));
    }

    public static function deurl($strUrl) {
        print_r(urldecode($strUrl));
    }

    public static function enser($str) {
        print_r(serialize($str));
    }

    public static function deser($str) {
        print_r(unserialize($str));
    }

    public static function enbase($str) {
        print_r(base64_encode($str));
    }

    public static function debase($str) {
        print_r(base64_decode($str));
    }
    
    public static function dejson($str) {
        print_r(json_decode($str, true));
    }

    public static function deunicode($str) {
        $json = '{"foo":"' . $str . '"}';
        $d = json_decode($json, true);
        $str = $d['foo'];
        print_r($str);
    }

    public static function __callStatic($method, $param) {
        echo  $method . '方法不存在';
    }
}
