<?php

namespace Pool\Tests;

use Pool\WorkerPool;

require __DIR__ . '/../StringReverseWorker.php';
require __DIR__ . '/../WorkerPool.php';

class PoolTest
{
    public function testCanGetNewInstancesWithGet()
    {
        $pool = new WorkerPool();
        $pool->get();
        $pool->get();
        print_r($pool->count());
    }

    public function testCanGetSameInstanceTwiceWhenDisposingItFirst()
    {
        $pool = new WorkerPool();
        $worker1 = $pool->get();
        print_r($pool->count());
        $pool->dispose($worker1);
        die(print_r($pool->count()));

    }
}

$test = new PoolTest();
$test->testCanGetNewInstancesWithGet();
$test->testCanGetSameInstanceTwiceWhenDisposingItFirst();
