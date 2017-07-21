<?php
	// class Bootstrap
	// {
	// 	private $_url;
	// 	private $_controller;
	// 	public function __construct()
	// 	{
	// 		$controllerURL=(isset($_GET['controller'])) ? $_GET['controller'] : 'index';// viết hoa chữ đầ
	// 		$actionURL=(isset($_GET['action'])) ? $_GET['action'] : 'index';
	// 		$controllerName = ucfirst($controllerURL);
	// 		$this->setURL();
	// 		if(!isset($this->_url['controller.php']))
	// 		{
	// 			$this->loadDefaultController();
	// 			exit();
	// 		}
	// 		//echo $controllerName;
	// 		//$flagError =false;
	// 		$this->loadExistingController();
	// 		$this->callControllerMethod();
	// 		// $file = CONTROLLER_PATH.$controllerName.'.php';
	// 		// if(file_exists($file))
	// 		// {
	// 		// 	require_once $file;
	// 		// 	$controller = new $controllerName();// tạo class  
	// 		// 	if(method_exists($controller, $actionURL))
	// 		// 	{
	// 		// 		$controller->loadModel($controllerURL);//load model
	// 		// 		$controller->$actionURL();
	// 		// 	}
	// 		// 	else
	// 		// 	{
	// 		// 		$this->error();
	// 		// 	}
	// 		// }
	// 		// else
	// 		// {
	// 		// 	$this->error();
	// 		// }	
	// 	}


	// 	//SET URL
	// 	private function setURL()
	// 	{
	// 		$this->_url=isset($_GET)? $_GET : null;
	// 	}

	// 	//LOAD DEAFULT CONTROLLER
	// 	private function loadDefaultController()
	// 	{
	// 		require_once(CONTROLLER_PATH.'index.php');
	// 		$this->_controller=new Index();
	// 		$this->_controller->index();
	// 	}

	// 	//LAOD EXISTING CONTROLLER
	// 	private function loadExistingController()
	// 	{
	// 		$file = CONTROLLER_PATH.$this->_url['controller'].'.php';
	// 		if(file_exists($file))
	// 		{
	// 			require_once $file;
	// 			$this->_controller = new $this->_url['controller'];// tạo class  
	// 			$this->_controller->loadModel($this->_url['controller']);
	// 		}
	// 		else
	// 		{
	// 			$this->error();
	// 		}
	// 	}

	// 	private function callControllerMethod()
	// 	{
	// 		if(method_exists($this->_controller, $this->_url['action'])==true)
	// 		 	{
	// 		// 		$controller->loadModel($controllerURL);//load model
	// 		// 		$controller->$actionURL();
	// 		 		$this->_controller->{$this->_url['action']}();
	// 		 	}
	// 		else
	// 		{
	// 			$this->error();
	// 		}
	// 	}


	// 	public function error()
	// 	{
	// 		require_once CONTROLLER_PATH.'error.php';
	// 		$error = new Error();
	// 		$error->index();
	// 	}


	// }
?>
<?php
	class Bootstrap
	{
		public function init()
		{
			$controllerURL=(isset($_GET['controller'])) ? $_GET['controller'] : 'index';// viết hoa chữ đầ
			$actionURL=(isset($_GET['action'])) ? $_GET['action'] : 'index';
			$controllerName = ucfirst($controllerURL);
			//echo $controllerName;
			$flagError =false;

			$file = CONTROLLER_PATH.$controllerName.'.php';
			if(file_exists($file))
			{
				require_once $file;
				$controller = new $controllerName();// tạo class  
				if(method_exists($controller, $actionURL))
				{
					$controller->loadModel($controllerURL);//load model
					$controller->$actionURL();
				}
				else
				{
					$this->error();
				}
			}
			else
			{
				$this->error();
			}	
		}

		public function error()
		{
			require_once CONTROLLER_PATH.'error.php';
			$error = new Error();
			$error->index();
		}


	}

?>
