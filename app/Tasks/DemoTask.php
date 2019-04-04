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
        return 'cron';
    }
}