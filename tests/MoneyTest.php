<?php

class MoneyTest extends PHPUnit_Framework_TestCase
{

    public function testCanBeNegated()
    {
        require_once ('Money.php');
        // Arrange
        $a = new Money(1);

        // Assert
        $this->assertEquals(4, $a->multiply());
    }
}