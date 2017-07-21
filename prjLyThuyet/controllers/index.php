<?php
class Index extends Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->view->title='HOME';
		//echo '<h3>'.__METHOD__.'<h3>';
	}

	public function index()// hiển thị menu
	{
		//echo '<h3>'.__METHOD__.'<h3>';
		$this->view->listKe = $this->db->listKe();
		$this->view->listKV = $this->db->listKV();
		$this->view->listHH = $this->db->listHH();
		$this->view->slHH = $this->db->slHH();
	//	$this->view->lislol = $this->db->getKVByID2(1);
		// $this->disconnect();
		$this->view->render('index/index');

	}
	public function add()// 
	{
		$this->index();
		//echo '<h3>'.__METHOD__.'<h3>';die("die called");
	}
	public function updateKV()
	{
		// echo '<h3>'.__METHOD__.'<h3>';die("die called");

		$this->loadModel("Khuvuc");
		$this->view->lislol=$this->db->getKVByID(1);
		echo "<pre>";
			print_r($this->view->lislol);
			echo "</pre>";
			die("xxxx");
		//$this->index();

		// $this->index();
		// echo "<pre>";
		// 	print_r($this->db->getKVByID(1));
		// 	echo "</pre>";
		// 	die("die");
		//$this->index();
	//	$this->view->render('index/index');
	}
}
?>