<?php
class Money
{
    private $amount;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function multiply()
    {
        return $this->amount * 3;
    }
}