<?php
/**
 * Tests for TrustFlow
 */

use PHPUnit\Framework\TestCase;
use Trustflow\Trustflow;

class TrustflowTest extends TestCase {
    private Trustflow $instance;

    protected function setUp(): void {
        $this->instance = new Trustflow(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Trustflow::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
