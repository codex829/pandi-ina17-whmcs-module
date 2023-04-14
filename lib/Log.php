<?php

namespace WHMCS\Module\Registrar\Pandi;

class Log {

    public static function write($txt)
    {
        $datetime = date('Y-m-d h:i:s');
        $txt = $datetime . ': ' . $txt . "\r\n";
        $logFilePath = dirname(__FILE__) . '/../log/log_' . date("Y-m-d") . '.log';
        file_put_contents($logFilePath, $txt, FILE_APPEND);
        // var_dump($logFilePath);
        // exit;
    }

}