


var posy	=	200; // You can change this to configure the distance from top (pixels)
var pos		=	posy+'px';
var text	=	"CONTACT US";


document.write('<div id="cnt_hover" style="cursor:pointer;position:absolute;right:0px; top:'+pos+';background:url(scf/contact_button.png) no-repeat bottom center; width:40px;height:125px;"></div>');
//Code to display the button

$('#cnt_hover').hover(function(){ //changes background image of button on hover
	$(this).css('background-position','top center')
	},function(){	
	$(this).css('background-position','bottom center')
})

document.write('<style type="text/css">#mask {position:absolute;left:0;top:0;z-index:9000;background-color:#000;display:none;cursor:pointer;} #boxes .window {position:absolute;left:0;top:0;width:375px;height:555px;display:none;z-index:9999; padding:0px;} #boxes #dialog {width:380px; height:565px;background-color:#ffffff; border:6px solid #a8a8a8;} .title_modal{background:#e4e4e4; color:#198996;padding:3px;font-size:14px;font-weight:bold; font-family:Arial,Helvetica,sans-serif;}</style>'); // Writes the css code required for the modal window

document.write("<div id='boxes'>");
document.write("<div id='dialog' class='window'><div class='title_modal'>"+text+"<div style='float:right;'><img src='scf/close.png' style='cursor:pointer;' onclick='closemodal()'/></div></div>");
document.write("<iframe src='scf/form.php?da' id='iframe_contact' frameborder='0' width='378' height='538'></iframe>");
document.write("</div>");
document.write("<div id='mask'></div>");
document.write("</div>");



function Reload () { //Function used to reload the iframe after load for an accurate div position
var f = document.getElementById('iframe_contact');
f.src = f.src;
}

	$('#cnt_hover').click(function(e) {
		e.preventDefault();
		var id = '#dialog';
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
		if ($.browser.msie) {
			maskHeight=maskHeight-5;
			maskWidth=maskWidth-1;
		 }
		$('#mask').css({'width':maskWidth,'height':maskHeight});	
		$('#mask').fadeIn(1000);	
		$('#mask').fadeTo("slow",0.8);	
		var winH = $(window).height();
		var winW = $(window).width();
		$(id).css('top',  winH/2-$(id).height()/2);
		$(id).css('left', winW/2-$(id).width()/2);
		$(id).fadeIn(2000); 
		Reload();
	});
	
	$('.window .close').click(function (e) {
		e.preventDefault();
		$('#mask').hide();
		$('.window').hide();
	});		
	
	$('#mask').click(function () {
		$(this).hide();
		$('.window').hide();
	});			
	
	closemodal=function(){
		$('#mask').hide();
		$('.window').hide();	
	}