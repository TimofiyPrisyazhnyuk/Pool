<?php

namespace Tests;

use WorkerPool;

spl_autoload_register(function ($class) {
    include __DIR__ . '/../' . $class . '.php';
});

/**
 * Class PoolTest
 * @package Tests
 */
class PoolTest
{
    /**
     * Test can get new instance.
     */
    public function testCanGetNewInstancesWithGet()
    {
        $pool = new WorkerPool();
        $pool->get();
        $pool->get();
        print_r($pool->count());
    }

    /**
     * Test can get same instance.
     */
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
