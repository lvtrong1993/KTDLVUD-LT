<?php 
class Khuvuc_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
		//	$this->setTable('group');// set lại table cần thao tác trong database
		$this->setConnect($this->connect);
	}


	public function getKVByID($idKV)
	{
		// echo '<h3>'.__METHOD__.'<h3>';die("die called");die("die model");
		$query[] 	= "SELECT * ";
		$query[] 	= "FROM `khuvuc` where `makv`=$idKV";
		//	$query[] 	= "GROUP BY `g`.`id`";
		$query		= implode(" ", $query);
		$result=$this->listRecord($query);
		return $result;
		echo $this->testcn;die("die model");
	}

}
	//?>