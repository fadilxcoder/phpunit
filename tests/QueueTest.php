<?php

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{

    private const TEXT1 = 'Lorem ipsum dolor sit amet';

    private const TEXT2 = 'consectetur adipiscing elit';

    protected function setUp(): void
    {
        #echo '¯\_(°_o)_/¯';
    }

    public function testNewQueueIsEmpty()
    {
        $queue = new Queue();
        
        $this->assertEquals(0, $queue->getCount());

        return $queue;
    }

    /**
     * @depends testNewQueueIsEmpty
     */
    public function testItemAddedToQueue(Queue $queue)
    {
        $queue->push(self::TEXT1);

        $this->assertEquals(1, $queue->getCount());

        return $queue;
    }
}