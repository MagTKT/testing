<?php

include 'calculerulatrice/calculer.php';

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    private $calculer;

    public function setUp() {
        $this->calculer = new calculeruler(6, 2);
    }

    public function testAdd(){
        $this->assertEquals(7, $this->calculer->add());
    }


    public function testSub(){
        $this->assertEquals(2, $this->calculer->sub());
    }


    public function testMul(){
        $this->assertEquals(20, $this->calculer->mul());
    }


    public function testDiv(){
        $this->assertEquals(7, $this->calculer->div());
    }

}