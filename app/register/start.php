<?php
declare(strict_types=1);
require __DIR__ . '/../../vendor/autoload.php';
use SwooleGateway\Register;



$register = new Register('0.0.0.0', 9327);

// 设置配置文件
$register->config_file = __DIR__ . '/config.php';

// 设置服务端参数 参考:http://wiki.swoole.com/#/server/setting
$register->set([
    'log_file' => __DIR__ . '/log/register.log',
    'stats_file' => __DIR__ . '/log/register.stats.log',
]);

$register->start();
