
	<?php
	//LOAD LIBS
	require_once'define.php';
	function __autoload($className)// hàm autoload => bỏ bớt việc require các class libs
	{
		//$path = 'libs/';
		require_once LIBRARY_PATH."{$className}.php";
	}
	$bootstrap =new Bootstrap();
	$bootstrap->init();
	?>
