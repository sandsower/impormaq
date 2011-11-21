
$(document).ready(function (){
	

   $("#tipoInput").attr('value',0);
   $("#marcaInput").attr('value',0);

	
    $('.switcher').find('.s_options').stop(true, true).slideUp('fast');
	
	$(".popup").hide();
	$("#mask").hide();
	setTimeout("mostrar()",1500);
	
	$("#mask").click(function () {
			$(this).hide();
			$('.popup').hide();
		});
		
		
	$(".cerrar").click(function () {
			$('.popup').hide();
			$("#mask").hide();
		});
		
		
	$('.cerrar').hover(function(){
	$(this).css('cursor','pointer');
	  },function()
	  {
		$(this).css('cursor','auto');
	  });
		
		
	$('.opmarca').hover(function(){
	$(this).css('cursor','pointer');
	  },function()
	  {
		$(this).css('cursor','auto');
	  });
	  
	$('.optipo').hover(function(){
	$(this).css('cursor','pointer');
	  },function()
	  {
		$(this).css('cursor','auto');
	  });
	  
	$('.submit').hover(function(){
	$(this).css('cursor','pointer');
	  },function()
	  {
		$(this).css('cursor','auto');
	  });
	  
	  $('.submit').click(function(){
		$('#form1').submit();
	  });
		
	 $('.switcher').hover(function() {
		$(this).find('.s_options').stop(true, true).slideDown('fast');
	 },function() {
		$(this).find('.s_options').stop(true, true).slideUp('fast');
	 });
	    $(".showpop").click(function(){
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
			var id = value.split('/')[5];
			value = value.replace("/thumbs/","/");
			$(".link").attr('href',value);
			$(".main"+id).attr('src',value);
		
		});
	$(".optipo").click(function(){
		var id = $(this).attr('id');
		if(id != 0)
		{
			$("#tipoInput").attr('value',id);
			$("#tipoText").text($(this).text());
		}
		else
		{
			$("#tipoInput").attr('value',0);
			$("#tipoText").text('Tipo');
		}
	});
	$(".opmarca").click(function(){
		var id = $(this).attr('id');
		if(id != 0)
		{
			$("#marcaInput").attr('value',id);
			$("#marcaText").text($(this).text());
		}
		else
		{
			$("#marcaInput").attr('value',0);
			$("#marcaText").text('Marca');
		}
	});
});
