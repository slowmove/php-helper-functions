<?php
namespace Slowmove\Helpers;

class Debug
{
	/**
	 * Function to use for pretty printing array variables or just dumping whatever otherwise;
	 * @param  mixed  $var      	The variable to dump
	 * @param  boolean $var_dump 	If the variable should be dumped var_dump including type, length etc.
	 * @param  boolean $die			If the PHP execution should die after the dump.
	 */
	public static function dump($var, $var_dump = false, $die = false)
	{
		if($var_dump === true) {
			var_dump($var);
		} else {
			if( is_array($var) ) {
				echo '<pre>';
				print_r($var);
				echo '</pre>';
			} else {
				echo $var;
			}
		}

		if($die) {
			if( !headers_sent() ){
				status_header( 500 );
				nocache_headers();
				header( 'Content-Type: text/html; charset=utf-8' );
			}
			die();
		}
	}
}