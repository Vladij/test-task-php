<?php

class Calculator 
{
    public $result;

    public function add($digit)
    {
        $this->result += $digit;
        return $this->result;
    }

    public function subtract($digit)
    {
        $this->result -= $digit;
        return $this->result;
    }

    public function multiply($digit)
    {
        $this->result *= $digit;
        return $this->result;
    }

    public function divide($digit)
    {
        $this->result /= $digit;
        return $this->result;
    }
}
