<?php

include 'calculatrice/calculer.php';


class Test
{
    private $calculer;

    public function setUp() {
        $this->calculer = new calculer(6, 2);
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