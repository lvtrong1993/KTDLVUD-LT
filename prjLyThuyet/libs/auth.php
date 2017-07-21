<?php 

//KIỂM TRA ĐĂNG NHẬP
	class Auth
	{
		public static function checkLogin()
		{
		Session::init();
		if(Session::get('loggedIn')==false)
		{
			Session::destroy();
			//$this->redirect('user', 'login');
			header("location: index.php?controller=user&action=login");
			exit();
		}
		}
	}
 ?>