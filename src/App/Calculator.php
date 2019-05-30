<?php

namespace App;

class Calculator
{
    public function add($argument1, $argument2)
    {
    	return $argument1 + $argument2;
    }

    public function divide($argument1, $argument2)
    {
    	if ($argument1||$argument2 == 0)
    		throw new DivisionByZeroException();
    	elseif($argument1 > $argument2)
    		return $argument1 / $argument2;
    		else 
    			return $argument2 / $argument1;
    }

}
