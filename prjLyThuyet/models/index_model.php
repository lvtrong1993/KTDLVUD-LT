<?php 
class Index_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
		//	$this->setTable('group');// set lại table cần thao tác trong database
	}


	public function listKe($options=null)
	{
		$query[] 	= "SELECT *";
		$query[] 	= "FROM `ke`";
		//	$query[] 	= "GROUP BY `g`.`id`";
		$query		= implode(" ", $query);
		$result=$this->listRecord($query);
		return $result;
	}
	public function listKV($options=null)
	{
		$query[] 	= "SELECT *";
		$query[] 	= "FROM `khuvuc`";
		//	$query[] 	= "GROUP BY `g`.`id`";
		$query		= implode(" ", $query);
		$result=$this->listRecord($query);
		return $result;
	}
	public function listHH($options=null)
	{
		//SELECT hh_id, make, mausac FROM hanghoa_ke INNER JOIN hanghoa ON hanghoa_ke.hh_id = hanghoa.mahh

		$query[] 	= "SELECT `mahh`,`mausac`, `make`, `ngan` FROM `hanghoa_ke` INNER JOIN `hanghoa` ON hanghoa_ke.hh_id = hanghoa.mahh
		";
	//	$query[] 	= "FROM `hanghoa_ke`";
		//	$query[] 	= "GROUP BY `g`.`id`";
		$query		= implode(" ", $query);
		$result=$this->listRecord($query);
		return $result;
	}

	//lisst HH 2

	public function listHH2(){
		//$result = array();

		$query[] ="SELECT `hh_id`, `make`, `mausac` FROM `hanghoa_ke` INNER JOIN `hanghoa` ON `hanghoa_ke.hh_id` = `hanghoa.mahh`";
		$query		= implode(" ", $query);
		$result=$this->listRecord($query);
		return $result;	
	}
	public function slHH()
	{

		$query[] ="SELECT SUM(`soluong`) FROM `hanghoa` ";
		$query		= implode(" ", $query);
		$result=$this->listRecord($query);
		return $result;
	}



		public function getKVByID2($idKV)
	{
		$query[] 	= "SELECT * ";
		$query[] 	= "FROM `khuvuc` where `makv`=$idKV";
		//	$query[] 	= "GROUP BY `g`.`id`";
		$query		= implode(" ", $query);
		$result=$this->listRecord($query);
		return $result;
	}

}
?>