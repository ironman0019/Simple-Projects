<?php

class Calculator {

    public $operator;
    public $num1;
    public $num2;

    public function __construct(string $operator, int $num1, int $num2)
    {
        $this -> operator = $operator;
        $this -> num1 = $num1;
        $this -> num2 = $num2;
    }

    public function calculate() 
    {
        switch ($this->operator) {
            case 'add':
                $resault = $this->num1 + $this->num2;
                return $resault;
                break;
             case 'sub':
              $resault = $this->num1 - $this->num2;
                return $resault;
                break;
             case 'multi':
              $resault = $this->num1 * $this->num2;
                return $resault;
                break;
             case 'div':
                $resault = $this->num1 / $this->num2;
                return $resault;
                break;
             default:
                echo "Error!";
                break;
        }
    }










}