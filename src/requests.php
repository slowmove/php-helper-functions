<?php
namespace Slowmove\Helpers;

class Request
{
	/**
	 * Simple parsing of GET variables
	 * @param  string $key           The GET parameter to query
	 * @param  string $default_value Fallback if the parameter isn't set
	 * @return string                Parameter if set, otherwise fallback which default is empty string
	 */
	public static function parseGet($key,  $default_value = '')
	{
	    return isset($_GET[$key]) ? $_GET[$key] : $default_value;
	}
	
	/**
	 * Simple parsing of POST variables
	 * @param  string $key           The POST parameter to query
	 * @param  string $default_value Fallback if the parameter isn't set
	 * @return string                Parameter if set, otherwise fallback which default is empty string
	 */
	public static function parsePost($key,  $default_value = '')
	{
	    return isset($_POST[$key]) ? $_POST[$key] : $default_value;
	}

	/**
	 * Gets the useragent for the visitor
	 * @return string 				A complete user agent, not parsed
	 */
	public static function useragent()
	{
		return $_SERVER['HTTP_USER_AGENT'];
	}

	/**
	 * Method to redirect the user to another URL
	 * @param  string $url 			URL to rederict the visitor to
	 */
	public static function redirect($url)
	{
		header('Location: '.$url);
	}
}