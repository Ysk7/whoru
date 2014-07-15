<?php

$phrase = 'test';
$sha512= base64_encode(bin2hex(mhash(MHASH_SHA512,$phrase)));

define('SALT_LENGTH', 15);
	function HashMe($phrase, &$salt = null)
	{
	$key = '!@#$%^&*()_+=-{}][;";/?<>.,';
	    if ($salt == '')
	    {
	        $salt = substr(hash('sha512',uniqid(rand(), true).$key.microtime()), 0, SALT_LENGTH);
	    }
    else
	    {
	        $salt = substr($salt, 0, SALT_LENGTH);
	    }
	 
	    return hash('sha512',$salt . $key .  $phrase);
	}

echo $sha512;

?>