<?php
namespace Slowmove\Helpers;

class String
{
	/**
	 * Truncates the string by nearest sentence
	 * @param  string $string              The text to truncate
	 * @param  int $your_desired_length 	The wanted max length
	 * @return string                      The shortened string
	 */
	public static function truncate($string, $your_desired_length) {		
		$string = strip_tags($string);		
		$parts = preg_split('/([\s\n\r]+)/', $string, null, PREG_SPLIT_DELIM_CAPTURE);
		$parts_count = count($parts);
		
		$length = 0;	
		$last_part = 0;
		$last_taken = 0;
		foreach($parts as $part){
		  	$length += strlen($part);
		  	if ( $length > $your_desired_length ){
		    	break;
		    }
		    ++$last_part;
		    if ( $part[strlen($part)-1] == '.' ){
		        $last_taken = $last_part;
		    }
		}
		return implode(array_slice($parts, 0, $last_taken));
	}
}