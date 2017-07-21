<?php

	// /if(!empty($this->listHH))
	{
		//$htmlKe='';
		// foreach ($this->listKe as $key => $value) 
		// {
		// }
		echo "<pre>";
		print_r($this->listHH);
		echo "</pre>";
	}

?>

<p id="p1" onclick="testClick(p1);"> thẻ 1</p>
<p id="p2" onclick="testClick(p2);"> thẻ 2</p>
<script type="text/javascript">
var strcc="icon-kv-4";
	function testClick(strcc)
	{
		$("#id-kv-4").click("contextmenu", function (event) {
			alert("cc");
		}
	}
</script>