<?php 
//autoload function

function load_class($files)
{
	require 'class/'.$files.'.php';
}
spl_autoload_register('load_class');
 ?>
 
 