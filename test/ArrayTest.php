<?php
use Slowmove\Helpers\Arrays;

class ArrayTest extends PHPUnit_Framework_TestCase
{
	private static $startArray = ['ananas', 'mango', 'orange', 'avocado', 'banana', 'lime'];

	public function testOrderArrayAlphabetical()
	{
		# This is the answer
		$answer = ['ananas', 'avocado', 'banana', 'lime', 'mango', 'orange'];
		# Do the magic
		$sortedArray = Arrays::orderAlphabetical(self::$startArray);		

		# since arrays in PHP are fucked up we will compare the array values order
		$comp = array_diff_assoc(array_values($sortedArray), array_values($answer));
		# then count if there is any differences
		$differences = count($comp);
		
		$this->assertTrue($differences === 0);
	}

	public function testOrderArrayAlphabeticalReversed()
	{
		# This is the answer
		$answer = ['orange', 'mango', 'lime', 'banana', 'avocado', 'ananas'];		
		# Do the magic
		$sortedArray = Arrays::orderAlphabetical(self::$startArray, null, true);		

		# since arrays in PHP are fucked up we will compare the array values order
		$comp = array_diff_assoc(array_values($sortedArray), array_values($answer));
		# then count if there is any differences
		$differences = count($comp);
		
		$this->assertTrue($differences === 0);		
	}

	public function testOrderArrayByLength()
	{
		# This is the answer
		$answer = ['lime', 'mango', 'banana', 'orange', 'ananas', 'avocado'];
		# Do the magic
		$sortedArray = Arrays::orderByLength(self::$startArray);

		# since arrays in PHP are fucked up we will compare the array values order
		$comp = array_diff_assoc(array_values($sortedArray), array_values($answer));
		# then count if there is any differences
		$differences = count($comp);
		
		$this->assertTrue($differences === 0);
	}
}