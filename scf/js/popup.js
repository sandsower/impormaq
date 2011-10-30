function mostrar() { 
   $("#showpop").click(function(){
		var maskHeight = $(document).height();
        var maskWidth = $(window).width();
		var id = $(this).attr('href');
		$('#mask').css({'width':maskWidth,'height':maskHeight});
		$("#mask").fadeIn('slow');
		$(id).fadeIn('slow');
		
    });
	
	$(".img").click(function()
		{
			
			var value = $(this).attr('src');
			value = value.replace("/thumbs/","/");
			$("#link").attr('href',value);
			$("#main").attr('src',value);
		
		});
} //checkHover

$(document).ready(function (){

	$(".popup").hide();
	$("#mask").hide();
	setTimeout("mostrar()",1500);
	
	$("#mask").click(function () {
			$(this).hide();
			$('.popup').hide();
		});
	$("#cerrar").click(function () {
			$('.popup').hide();
			$("#mask").hide();
		});
});
