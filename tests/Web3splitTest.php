<?php
/**
 * Tests for Web3Split
 */

use PHPUnit\Framework\TestCase;
use Web3split\Web3split;

class Web3splitTest extends TestCase {
    private Web3split $instance;

    protected function setUp(): void {
        $this->instance = new Web3split(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Web3split::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
