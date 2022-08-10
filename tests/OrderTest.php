<?php

use Classes\PaymentGateway;
use PHPUnit\Framework\TestCase;

class OrderTest extends TestCase
{
    protected function tearDown(): void
    {
        Mockery::close();
    }

    public function testOrderIsProcessed()
    {
        $gateway = $this->getMockBuilder(PaymentGateway::class)
                        ->addMethods(['charge'])
                        ->getMock();
        
        $gateway->expects($this->once())
                ->method('charge')
                ->with($this->equalTo(200))
                ->willReturn(true);
        
        $order = new Order($gateway);
        $order->amount = 200;
        
        $this->assertTrue($order->process());
    }

    public function testOrderIsProcessedUsingMockery()
    {
        $gateway = Mockery::mock(PaymentGateway::class);

        $gateway->shouldReceive('charge')
                ->once()
                ->with(200)
                ->andReturn(true)
        ;

        $order = new Order($gateway);
        $order->amount = 200;
        
        $this->assertTrue($order->process());
    }
}