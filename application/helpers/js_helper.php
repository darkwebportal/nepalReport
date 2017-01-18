<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('jsInitializer'))
{
    function jsInitializer()
    {
    	$toInitialize=array("baseUrl"=>base_url(),
			 "mode"=>"development" );
        $str="";
		foreach ($toInitialize as $key => $value) {
			$str.="var $key = '$value';\n";
		}
		return $str;
    }  
}