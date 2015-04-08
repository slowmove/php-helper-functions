<?php
namespace Slowmove\Helpers;

class Arrays
{
	/**
	 * Order the array alphabetical by either values or properties on objects in the array
	 * @param  array  $array    The array to sort
	 * @param  string  $param    Optional. A propertyname to sort on if multidimensional Array.
	 * @param  boolean $reversed Optional. Whether it should be reversed alphabetical or not.
	 * @return array
	 */
	public static function orderAlphabetical(array $array, $param = null, $reversed = false)
	{
		uasort($array, function($a, $b) {	    	
			if(isset($param)) {
				return strtolower($a[$param]) > strtolower($b[$param]);	
			} else {
				return strtolower($a) > strtolower($b);	
			}
		});

		if($reversed === true) {
			return array_reverse($array);
		} else {
			return $array;
		}
	}

	/**
	 * Order the array alphabetical by either values or properties on objects in the array
	 * @param  array  $array    The array to sort
	 * @param  string  $param    Optional. A propertyname to sort on if multidimensional Array.
	 * @param  boolean $reversed Optional. Whether it should be ordered reverse by length or not.
	 * @return array
	 */
	public static function orderByLength(array $array, $param = null, $reversed = false)
	{
		usort($array, function($a, $b) {
			if(isset($param)) {
				return mb_strlen( $a[$param], 'UTF-8' ) - mb_strlen( $b[$param], 'UTF-8' );
			} else {
				return mb_strlen( $a, 'UTF-8' ) - mb_strlen( $b, 'UTF-8' );
			}
		});

		if($reversed === true) {
			return array_reverse($array);
		} else {
			return $array;
		}		
	}

	/**
	 * Checks whether array is associative or numeric
	 * @param  array   $array Array to check if associative
	 * @return boolean        
	 */
	public static function isAssociative(array $array)
	{
		return (bool)count(array_filter(array_keys($array), 'is_string'));
	}
}