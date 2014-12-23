<?php

class Reminder implements OperatorInterface
{
	public function run($number, $result)
	{
		return $result % $number;
	}
}