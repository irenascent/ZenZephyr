<?php
/**
 * Tests for ZenZephyr
 */

use PHPUnit\Framework\TestCase;
use Zenzephyr\Zenzephyr;

class ZenzephyrTest extends TestCase {
    private Zenzephyr $instance;

    protected function setUp(): void {
        $this->instance = new Zenzephyr(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Zenzephyr::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
