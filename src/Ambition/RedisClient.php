<?php
/**
 * Created by PhpStorm.
 * User: zhaozhaozemin
 * Date: 2019/4/21
 * Time: 下午2:26
 */

namespace Ambition\First;

use Predis\Client;

class RedisClient
{
//    private $redisClient;
//    public function __construct()
//    {
//        $this->redisClient =new Client();
//    }

    public function getValue($key)
    {
        return $key;
    }
}