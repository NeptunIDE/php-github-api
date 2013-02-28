<?php

function ghautoload($class)
{
	$pathChunk = str_replace(array('\\', '_'), DIRECTORY_SEPARATOR, $class);
	$file = '.' . DIRECTORY_SEPARATOR . 'vendors' . DIRECTORY_SEPARATOR . $pathChunk . '.php';
	if (is_file($file)) {
		require_once $file;
	}
}

spl_autoload_register('ghautoload');