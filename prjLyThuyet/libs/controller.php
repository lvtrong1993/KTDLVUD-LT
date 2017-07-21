<?php
$view;
class Controller
{
	
	public function __construct()
	{
		//echo '<h3>'.__METHOD__.'</h3>';
		$this->view = new View();
	}
	public function loadModel($name)// hàm load models
	{
		$path =MODEL_PATH.$name.'_model.php';
		$modelName = ucfirst($name).'_Model';
		if(file_exists($path))
		{
			// echo $path; die("die to call path");
			require_once $path;
			$this->db = new $modelName(); 
		}
		else 
			{echo"File is not exists "; die("die called");}
	}


	// PHƯƠNG THỨC CHUYỂN TRANG
	public function redirect($controller='index', $action='index')
	{
		header("location: index.php?controller=$controller&action=$action");
	}
}
?>