<?php

class Error extends Controller

{


	public function index()
	{
	//	echo '<h3>'.__METHOD__.'</h3>';
		$message="This is an error";
		$this->view->msg=$message;
		$this->view->render('error/index');
	}

}
?>