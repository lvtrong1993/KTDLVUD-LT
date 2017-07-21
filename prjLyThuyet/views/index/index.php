
<body>

<?php

		//$slHH=0;
		//if(!empty($this->lislol))
		{
			echo "<pre>";
			print_r($this->lislol);
			echo "</pre>";
			//die();
		}
?>
<!-- <p id="clickme1" onclick="menuKV1('xxx')">click me</p> -->
	<?php
	// /if(!empty($this->listHH))
	{
	//	print_r($this->slHH);
		$slHH=0;
		if(!empty($this->slHH))
		{
			foreach ($this->slHH as $key => $val3)
			{
				$slHH=$val3['SUM(`soluong`)'];
			} 
		}
		 echo $slHH;
		// echo "<pre>";
		// print_r($this->listHH);
		// echo "</pre>";
	}
	?>
	<div class="container-fluid" >
		<div class="row">
			<!-- CỬA RA VÀO VÀ QUẦY THU NGÂN -->
			<div class="cua-ra-vao bg-success" id="cua-ra-vao">
				CỬA 
				RA
				VÀO
			</div>
			<div class="quay-thu-ngan bg-danger" id="quay-thu-ngan-1" style="color: black;">
				QUẦY THU NGÂN 1
			</div>
			<div class="quay-thu-ngan bg-danger" id="quay-thu-ngan-2" style="color: black;">
				QUẦY THU NGÂN 2
			</div>
			<!-- LOAD KỆ -->
			<?php 
			$xhtml='';
			if(!empty($this->listKV))
			{
				// echo "<pre>";
				// print_r($this->listKV);
				// echo "<pre>";
				foreach ($this->listKV as $key => $val) 
				{
					$idKV =$val['makv'];
					$gocXoay = $val['gocxoay'];


					///////////////////////////////////////////////////////menuKV
					$xhtml.= 
					"
					<div class='khuvuc ' ; style='transform: rotate(".$gocXoay."deg);'  id='kv-".$idKV."'>
						<div class='kv-id bg-primary'>KV-0".$idKV."</div>
						<div id='icon-kv-".$idKV."' class='icon-edit-kv bg-primary glyphicon glyphicon-cog elem' onclick=\"menuKV1('icon-kv-".$idKV."')\"></div>
						"
						;

						if(!empty($this->listKe))
						{
							$htmlKe='';
							foreach ($this->listKe as $key => $value) 
							{


								$idKe=$value['make'];
								$idKV2 =$value['makv'];
								$chieuCao=$value['chieucao'];
									// echo "<br/> -----".$chieuCao;
								$soNgan=$value['songan'];
									// $soNgan1Hang =round($songan/$chieucao);
									// echo "xxxxxxxxxxxxx".$soNgan1Hang;
								if($idKV2 == $idKV)
								{
								// == LOAD HÀNG HÓA
									$xhtml.="<div class='ke' id='ke0".$idKe."'>
									<div class='icon-edit-ke bg-primary glyphicon glyphicon-info-sign elem'>
									</div>
									";
									$soNgan1Hang =round($soNgan/$chieuCao);


									$count =1;
									$count2 =0;

								//	if(!empty($this->listHH))
									{

									//	foreach ($this->listHH as $key => $val2) 
										{
								// ./ LOAD HÀNG HÓA

											while($count <= $soNgan){
												

												if(($count2 >0) && ($count2 % $soNgan1Hang ==0))
												{
												//	if(!empty($this->listHH))


													$xhtml .="<br />"; //<div class='ngan1' ondrop='drop(event)' ondragover='allowDrop(event)'></div>
												}

												$xhtml2="";
											
												if(!empty($this->listHH))
												{
														$idDem=0;
													foreach ($this->listHH as $key => $val2) 
													{$idDem++;

														$idKe2 =$val2['make'];
														$soNgan2=$val2['ngan'];
														$mauSacHH =$val2['mausac'];
														if($idKe2==$idKe && $soNgan2==$count)
														{

															$xhtml2.=
															"<div id='drag".$idDem."' draggable='true' ondragstart='drag(event)' style='height: 100%; background: ".$mauSacHH."'></div>";
															
														//	echo "------ID nè--".$idDem;
														}
													}
												}

												//$xhtml2="<div id='drag4' draggable='true' ondragstart='drag(event)' style='height: 100%; background: rgb(24, 125, 240);'></div>";
												$xhtml .="<div class='ngan1' ondrop='drop(event)' ondragover='allowDrop(event)'>$xhtml2</div>";
												$count ++;
												$count2++;	
												$xhtml2="";							
											}


										}
									}

									$xhtml.="</div>";// thẻ ./div kết thuc kệ
								}
							}
						}

						$xhtml.="</div>";
						$getMap= "$('#kv- ".$idKV."').css({top: '20px', left: '220px', position:'absolute'})";
					}
					echo $xhtml;
				}


				if(!empty($this->listKV))
				{
					$getMap='';

					foreach ($this->listKV as $key => $val) 
					{

						$idKV =$val['makv'];
						$x = $val['toadox'];
						$y = $val['toadoy'];
						$getMap.= "
						$('#kv-".$idKV."').css({top: '".$y."px', left: '".$x."px', position:'absolute'});

						";
					}
					//echo "<script language='JavaScript'>".$getMap."</script>";
				}
				?>

				<?php
				require_once("control-panel.php");				
				?>
				<script language="JavaScript"> 
	//VỊ TRÍ CỬA RA VÀO VÀ QUẦY THU NGÂN
	$("#cua-ra-vao").css({top: '170px', left: '10px', position:'absolute'});
	$("#quay-thu-ngan-1").css({top: '150px', left: '80px', position:'absolute'});
	$("#quay-thu-ngan-2").css({top: '250px', left: '80px', position:'absolute'});
	//ĐẶT DIV KHU VỰC TẠI VỊ TRÍ THEO TỌA ĐỘ X-Y VỚI TOP:Y, LEFT:X
	// $("#kv-1").css({top: '20px', left: '220px', position:'absolute'});
	// $("#kv-2").css({top: '40px', left: '10px', position:'absolute'});

	// $("#kv-3").css({top: '350px', left: '0px', position:'absolute'});
	// $("#kv-4").css({top: '125px', left: '170px', position:'absolute'});
	// $("#kv-5").css({top: '235px', left: '170px', position:'absolute'});
	// $("#kv-6").css({top: '360px', left: '220px', position:'absolute'});
	// $("#kv-7").css({top: '115px', left: '1140px', position:'absolute'});
	// $("#kv-8").css({top: '232px', left: '1140px', position:'absolute'});
	// ICON SHOW TEAM INFO 


	<?php
	echo $getMap;
	?>

	$("#icon-show-team-info").css({top: '135px', left: '30px', position:'absolute'});
	var firefox=document.getElementById&&!document.all; 
	document.onmousemove=mouseMove;
	var XKV=0;
	var YKV=0;
	var toaDo; 
	function mouseMove(e){ 
		var str; 
		if (firefox)
		{

			toaDo="X="+e.clientX+", Y="+e.clientY; 
		}
		else
		{ 

			toaDo="X="+event.clientX+", Y="+event.clientY;
		} 
		document.title=toaDo;
		$("#txtToaDo").text(toaDo) 



			// set X - Y  KV test
			if (firefox){
				XKV=e.clientX;
				YKV=e.clientY;
				$("#txtXKV").val(XKV);
				$("#txtYKV").val(YKV);
			} 
			else
			{
				XKV=event.clientX;
				YKV= event.clientY;
				$("#txtXKV").val(XKV);
				$("#txtYKV").val(YKV);
			}
		// ./set X - Y  KV test
	}

	// XỬ LÝ SHOW - CLOSE TEAM INFO
// 	var beforShow = "670px", afterShow = "340px";
// 	$(function() {
// 		$("#show-team-info").click(function() {

//     if($("#team-info").css("marginTop") == beforShow) // kiểm tra div đang chìm?
//       $("#team-info").animate({ marginTop: afterShow }); // kéo div lên
// });
// 	});

// 	$(function() {
// 		$("#icon-close-team-info").click(function() {

//     if($("#team-info").css("marginTop") == afterShow) // kiểm tra div đang sho?
//       $("#team-info").animate({ marginTop: beforShow }); // kéo div xuống
// });
// 	});
///// cách 2
$(document).ready(function(){
	$("#team-info").slideUp();
		// $("#team-info").hid();
		$("#show-team-info").click(function(){
			$("#team-info").slideDown();
		});
		$("#icon-close-team-info").click(function(){
			$("#team-info").slideUp();
		});
	});
	// ./ XỬ LÝ SHOW TEAM INFO
		// $(document).ready(function() {
		// 	$("#element").zoomTarget();
		// });

	// KÉO THẢ HÀNG HÓA
	function allowDrop(ev) {
		ev.preventDefault();
	}

	function drag(ev) {
		ev.dataTransfer.setData("text", ev.target.id);
	}

	function drop(ev) {
		ev.preventDefault();
		var data = ev.dataTransfer.getData("text");
		ev.target.appendChild(document.getElementById(data));
	}
	// ./ KÉO THẢ HÀNG HÓA

	//RIGHT CLICK SHOW CUSTOM MENU HÀNG  HÓA
// Trigger action when the contexmenu is about to be shown
$("#cc").bind("contextmenu", function (event) {

    // Avoid the real one
    event.preventDefault();

    // Show contextmenu
    $(".custom-menu").finish().toggle(100).

    // In the right position (the mouse)
    css({
    	top: event.pageY + "px",
    	left: event.pageX + "px"
    });
    //get id div
    // var status = $(this).attr('id');
    // alert(status);
});
// If the document is clicked somewhere -- document
$(document).bind("mousedown", function (e) {

    // If the clicked element is not the menu
    if (!$(e.target).parents(".custom-menu").length > 0) {

        // Hide it
        $(".custom-menu").hide(100);
    }
});
// If the menu element is clicked
$(".custom-menu li").click(function(){

    // This is the triggered action name
    switch($(this).attr("data-action")) {

        // A case for each action. Your actions here
        case "first": alert("first"); break;
        case "second": alert("second"); break;
        case "third": alert("third"); break;
        case "fourth": $(".custom-menu").hide(100); break;

    }
    // Hide it AFTER the action was triggered
    $(".custom-menu").hide(100);
});
	////RIGHT CLICK SHOW CUSTOM MENU HÀNG  HÓA

	//RIGHT CLICK SHOW CUSTOM MENU KỆ
// Trigger action when the contexmenu is about to be shown
$("#ke01").click("contextmenu", function (event) {

    // Avoid the real one
    event.preventDefault();

    // Show contextmenu
    $(".menu-ke").finish().toggle(100).

    // In the right position (the mouse)
    css({
    	top: event.pageY + "px",
    	left: event.pageX + "px"
    });
    //get id div
    // var status = $(this).attr('id');
    // alert(status);
});
// If the document is clicked somewhere -- document
$(document).bind("mousedown", function (e) {

    // If the clicked element is not the menu
    if (!$(e.target).parents(".menu-ke").length > 0) {

        // Hide it
        $(".menu-ke").hide(100);
    }
});
// If the menu element is clicked
$(".menu-ke li").click(function(){

    // This is the triggered action name
    switch($(this).attr("data-action")) {

        // A case for each action. Your actions here
        case "first": alert("first"); break;
        case "second": alert("second"); break;
        case "third": alert("third"); break;
        case "fourth": $(".menu-ke").hide(100); break;

    }
    // Hide it AFTER the action was triggered
    $(".menu-ke").hide(100);
});
	/// ./RIGHT CLICK SHOW CUSTOM MENU KỆ

		//RIGHT CLICK SHOW CUSTOM MENU KHU VỰC
// Trigger action when the contexmenu is about to be shown
//#icon-kv-1
//////////////////////////////////


	$(document).ready(function(){
    $(".icon-edit-kv").click(function(){
    	var strId = $(this).attr('id');
    	var id = strId[strId.length -1];
     // console.log($(this).text());
     // alert(id);
//$(".menu-khu-vuc li").attr('data-action',strId);
$(".menu-khu-vuc li").attr('data-id',strId);
$(".disable-li").text("KV-"+id);

     ////////
         // Avoid the real one
    event.preventDefault();


    // Show contextmenu
    $(".menu-khu-vuc").finish().toggle(100).

    // In the right position (the mouse)
    css({
    	top: event.pageY + "px",
    	left: event.pageX + "px"
    });
     //////
    });
})

//////////////////////
$("#icon-kv-1m").click("contextmenu", function (event) {

    // Avoid the real one
    event.preventDefault();

    // Show contextmenu
    $(".menu-khu-vuc").finish().toggle(100).

    // In the right position (the mouse)
    css({
    	top: event.pageY + "px",
    	left: event.pageX + "px"
    });
    //get id div
    // var status = $(this).attr('id');
    // alert(status);
});
// If the document is clicked somewhere -- document
$(document).bind("mousedown", function (e) {

    // If the clicked element is not the menu
    if (!$(e.target).parents(".menu-khu-vuc").length > 0) {

        // Hide it
        $(".menu-khu-vuc").hide(100);
    }
});
// If the menu element is clicked
$(".menu-khu-vuc li").click(function(){

    // This is the triggered action name
    switch($(this).attr("data-action")) {

        // A case for each action. Your actions here
        case "first": alert("first"); break;
        case "second": alert("second"); break;
        case "third": alert("third"); break;
        case "fourth": $(".menu-khu-vuc").hide(100); break;

    }
    // Hide it AFTER the action was triggered
    $(".menu-khu-vuc").hide(100);
});
	////RIGHT CLICK SHOW CUSTOM MENU KHU VỰC


	// COLOR PICKER
	var divID =<?php echo$slHH; ?>;
	var stringDivID="drag";
	$("#mauSac").spectrum({
		color: "#f00",
		change: function(color) {
			$("#basic-log").text("change called: " + color.toHexString());
			var  xxx =color.toRgbString();
			//$(".lol").addClass("lol2");
			divID=divID+1;
			stringDivID=stringDivID+divID.toString();
			//alert(stringDivID);
			var vkl ="<div id='"+stringDivID+"' draggable='true' ondragstart='drag(event)'  style=' height: 100%;'></div>"
			$("#mauSac").append(vkl);
			// $('.lol2').attr( 'id', 'dkm' );
			var vkl2 = "#"+stringDivID;
			$(vkl2).css('background', xxx);
			var x = document.getElementById("dkm");
			stringDivID="drag";
		}

	});

	// ./COLOR PICKER
</script>
<script type="text/javascript">
// var idkvn="id-kv-1";
// var cliclme = $( "#clickme1" ).text();
// 	function menuKV1(fff)
// 	{ //var stringKV = "#"+idkv;
// 		$("#icon-kv-4").click("contextmenu", function (event) {

//     // event.preventDefault();
//     // $(".menu-khu-vuc").finish().toggle(100).
//     // css({
//     // 	top: event.pageY + "px",
//     // 	left: event.pageX + "px"
//     // });
//     alert(fff);
    
// });
// 	}



// 	$(document).ready(function(){
//     $(".icon-edit-kv").click(function(){
//     	var id = $(this).attr('id');
//      // console.log($(this).text());
//      alert(id);
//     });
// })




</script>


<!-- 	<div id="drag1" draggable="true" ondragstart="drag(event)" id="drag3"  style="background: red; height: 100%;">	
</div> -->
</body>
</html>