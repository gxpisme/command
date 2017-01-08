<?php
/**
 * 命令的脚本
 * @author xpisme 2017-01-08
 * @mail gxpisme@gmail.com
 * @wechat gxpisme
 */

script::run($argv);
echo PHP_EOL;

class script {

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
        print_r(base64_encode($str));
    }

    public static function __callStatic($method, $param) {
        echo  $method . '方法不存在';
    }
}
