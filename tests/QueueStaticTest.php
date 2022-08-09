<?php

use Exceptions\QueueException;
use PHPUnit\Framework\TestCase;

class QueueStaticTest extends TestCase
{

    private const TEXT1 = '1Lorem ipsum dolor sit amet';

    private const TEXT2 = '2consectetur adipiscing elit';

    public static $queue;

    public static function setUpBeforeClass(): void
    {
        static::$queue = new Queue();
    }

    protected function setUp(): void
    {
        static::$queue->clear();
    }

    public function testNewQueueIsEmpty()
    {
        $this->assertEquals(0, static::$queue->getCount());
    }

    public function testItemAddedToQueue()
    {
        static::$queue->push(self::TEXT1);

        $this->assertEquals(1, static::$queue->getCount());
    }

    public function testItemRemovedFromQueue()
    {
        static::$queue->push(self::TEXT2);
        static::$queue->pop();

        $this->assertEquals(0, static::$queue->getCount());
    }

    public function testItemRemovedRespectivelyFromQueue()
    {
        static::$queue->push(self::TEXT1);
        static::$queue->push(self::TEXT2);
        $item = static::$queue->pop();

        $this->assertEquals(self::TEXT1, $item);
    }

    public function testItemLimitQueue()
    {
        $this->expectException(QueueException::class);
        $this->expectExceptionMessage("Queue is full !");
        static::$queue->push(self::TEXT1);
        static::$queue->push(self::TEXT2);
        static::$queue->push('3B');
        static::$queue->push('4C');
        static::$queue->push('5D');
        static::$queue->push('6E');
    }

    public static function tearDownAfterClass(): void
    {
        static::$queue = null;
    }
}