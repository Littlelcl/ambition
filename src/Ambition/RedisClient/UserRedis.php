<?php
/**
 * Created by PhpStorm.
 * User: zhaozhaozemin
 * Date: 2019/4/21
 * Time: 下午2:34
 */

namespace Ambition\First\RedisClient;

use Ambition\First\RedisClient;

class UserRedis
{
    private $redisClient;

    public function __construct()
    {
        $this->redisClient = new RedisClient();
    }

    public function getString()
    {
        return $this->redisClient->getValue('eee');
    }
}