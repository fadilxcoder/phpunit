<?php

use PHPUnit\Framework\TestCase;

class QueueRefactoTest extends TestCase
{

    private const TEXT1 = 'Lorem ipsum dolor sit amet';

    private const TEXT2 = 'consectetur adipiscing elit';

    protected $queue;

    protected function setUp(): void
    {
        #echo '¯\_(°_o)_/¯';

        $this->queue = new Queue();
    }

    public function testNewQueueIsEmpty()
    {
        $this->assertEquals(0, $this->queue->getCount());
    }

    public function testItemAddedToQueue()
    {
        $this->queue->push(self::TEXT1);

        $this->assertEquals(1, $this->queue->getCount());
    }

    public function testItemRemovedFromQueue()
    {
        $this->queue->push(self::TEXT2);
        $item = $this->queue->pop();

        $this->assertEquals(0, $this->queue->getCount());
        $this->assertEquals(self::TEXT2, $item);
    }

    public function testItemRemovedRespectivelyFromQueue()
    {
        $this->queue->push(self::TEXT1);
        $this->queue->push(self::TEXT2);
        $item = $this->queue->pop();

        $this->assertEquals(self::TEXT1, $item);
    }

    protected function tearDown(): void
    {
        #echo '¯\_(ツ)_/¯';
        unset($this->queue); // Not neccessary !
    }
}