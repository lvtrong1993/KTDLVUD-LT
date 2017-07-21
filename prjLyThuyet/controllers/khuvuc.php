<?php
class KhuVuc extends Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->view->title='HOME';
		$this->loadModel("khuvuc");
		//$this->view->listcc = $this->db->getKVByID("1");
		//echo '<h3>'.__METHOD__.'<h3>';
	//	$this->view->listcc = $this->db->getKVByID(1);

	}

	public function index()// hiển thị menu
	{
		// echo '<h3>'.__METHOD__.'<h3>';die("Die function is called");
		 $this->view->listcc = $this->db->getKVByID(1);
		 	echo "<pre>";
			print_r($this->view->listcc);
			echo "</pre>";
			die("xxxx");
		// $this->view->listKV = $this->db->listKV();
		// $this->view->listHH = $this->db->listHH();
		// $this->view->slHH = $this->db->slHH();
		// $this->view->render('index/index');

	}
	public function add()// 
	{
		//echo '<h3>'.__METHOD__.'<h3>';
	}
}
?>