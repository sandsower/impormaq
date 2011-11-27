$(document).ready(function(){
	$('label').click(function(){
		var ele = $(this).html()+"Contenido";
		$('.contenido').each(function(){
			if($(this).attr('id') != ele)
			{
				$(this).hide('slow');
			}
			else
			{
				$(this).show('slow');
			}
		});
	});
});