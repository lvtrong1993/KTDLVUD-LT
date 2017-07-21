// JavaScript Document



$(document).ready(function(){
	var stt = 0;
		var startImg = $(".img_banner:first").attr("stt"); // lấy stt của image đầu tiên -- FIST
		var endImg = $(".img_banner:last").attr("stt");
	$("#next").click(function(){
		
		//alert(endImg);
		$(".img_banner").each(function(){
			if($(this).is(':visible')){
				stt = $(this).attr("stt"); // attr thành phần dc chọn ? google thêm
				
			}
		})
		var next = ++stt;
			if(next <= endImg)
			{
				$(".img_banner").hide();
				//$(".radBanner:checked").is(':unchecked');
		
		
				//alert(stt);
				$(".img_banner").eq(next).show(1000);
				$(".radBanner").eq(next).is(':checked');
			}
			else
			{
				$(".img_banner").hide(1000);
		
				stt = startImg;
				//alert(stt);
				$(".img_banner").eq(stt).show(1000);
			}
		
		/*
		$(".img_banner").hide(1000);
		
		
		alert(stt);
		$(".img_banner").eq(next).show(1000);*/
		
	});
	
	// nút prev
	
	$("#prev").click(function(){
		
		//alert(endImg);
		$(".img_banner").each(function(){
			if($(this).is(':visible')){
				stt = $(this).attr("stt"); // attr thành phần dc chọn ? google thêm
				
			}
		})
		var prev = --stt;
			if(next <= endImg)
			{
				$(".img_banner").hide();
				//$(".radBanner:checked").is(':unchecked');
		
		
				//alert(stt);
				$(".img_banner").eq(next).show(1000);
				$(".radBanner").eq(next).is(':checked');
			}
			else
			{
				$(".img_banner").hide(1000);
		
				stt = startImg;
				//alert(stt);
				$(".img_banner").eq(stt).show(1000);
			}
		
		/*
		$(".img_banner").hide(1000);
		
		
		alert(stt);
		$(".img_banner").eq(next).show(1000);*/
		
	});
	
	
	// hàm tự nhảy hình
	setInterval(function(){
		$("#next").click();
	},5000);
	
	
		
});

/*
$(document).ready(function(){
	var stt = 0;
		var startImg = $(".img_banner:first").attr("stt"); // lấy stt của image đầu tiên -- FIST
		var endImg = $(".img_banner:last").attr("stt");
	$("#next").click(function(){
		
		//alert(endImg);
		$(".img_banner").each(function(){
			if($(this).is(':visible')){
				stt = $(this).attr("stt"); // attr thành phần dc chọn ? google thêm
				
			}
		})
		var next = ++stt;
			if(next <= endImg)
			{
				$(".img_banner").hide(1000);
		
		
				alert(stt);
				$(".img_banner").eq(next).show(1000);
			}
			else
			{
				$(".img_banner").hide(1000);
		
				stt = startImg;
				alert(stt);
				$(".img_banner").eq(stt).show(1000);
			}
*/