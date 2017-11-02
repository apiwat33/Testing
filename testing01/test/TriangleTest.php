<?php

use PHPUnit\Framework\TestCase;

use Triangle\Triangle;

class TriangleTest extends TestCase {

    public function testCanPerformUnitTest(): void{
        $this->assertTrue(true);
    }

    public function testIsScalene(): void{
        $t = new Triangle(3,4,5);
        //$this->assertEquals(Expected Output,Actual Output)
        $this->assertEquals("Scalene",$t->getType()['answer']);
    }


}