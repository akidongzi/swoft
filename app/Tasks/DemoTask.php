<?php
/**
 * This file is part of Swoft.
 *
 * @link https://swoft.org
 * @document https://doc.swoft.org
 * @contact group@swoft.org
 * @license https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */


namespace App\Tasks;

use App\Lib\DemoInterface;
use App\Models\Entity\User;
use Swoft\App;
use Swoft\Bean\Annotation\Inject;
use Swoft\HttpClient\Client;
use Swoft\Redis\Redis;
use Swoft\Rpc\Client\Bean\Annotation\Reference;
use Swoft\Task\Bean\Annotation\Scheduled;
use Swoft\Task\Bean\Annotation\Task;

/**
 * Demo task
 *
 * @Task("demo")
 */
class DemoTask
{
    /**
     * crontab定时任务
     * 每一秒执行一次
     *
     * @Scheduled(cron="* * * * * *")
     */
    public function cronTask()
    {
        echo time() . "每一秒执行一次  \n";
        App::error("this errro log");
        return 'cron';
    }

    /**
     * 每分钟第3-5秒执行
     *
     * @Scheduled(cron="3-5 * * * * *")
     */
    public function cronooTask()
    {
        echo time() . "第3-5秒执行\n";
        App::error("this errro log");
        return 'cron';
    }
}