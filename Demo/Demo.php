<?php
/**
 * Created by PhpStorm.
 * User: zhaozhaozemin
 * Date: 2019/4/21
 * Time: 下午2:42
 */
require_once '../vendor/autoload.php';

use Ambition\First\RedisClient\UserRedis;

$userRedis = new UserRedis();
echo $userRedis->getString().PHP_EOL;