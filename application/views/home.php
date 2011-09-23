 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to GetIt</title>
<link rel="stylesheet" href="<?php echo base_url(); ?>css/UnderConstruction/reset.css" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>css/UnderConstruction/sketcher.css" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>css/UnderConstruction/colorbox.css" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Lato:regular,regularitalic,900' rel='stylesheet' type='text/css' />
<!-- CHROME -->
<link href="css/chrome.css" rel="stylesheet" type="text/css" />
<!-- SAFARI -->
<link href="css/safari.css" rel="stylesheet" type="text/css" />
<!--[if IE 7]>
<link href="css/ie7.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!--[if IE 8]>
<link href="css/ie8.css" rel="stylesheet" type="text/css" />
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js"></script>
<![endif]-->
<script type="text/javascript" src="<?php echo base_url(); ?>js/UnderConstruction/jquery-1.5.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/UnderConstruction/jquery.countdown.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/UnderConstruction/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/UnderConstruction/sketcher.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		//Setting trigger, content and dimensions of contact box overlay
		$(".contactusicon").colorbox({width:"600px", height:"580px", initialWidth:"600px", initialHeight:"580px", speed:"2000", inline:true, href:"#contactus"});
	});
</script>
<script type="text/javascript">
//<![CDATA[
    var secondsStr = "31348891";
//]]>
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-2473517-16']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>

<body class="default">

	<div id="page">

		<h1></h1>		<div id="countdown" class="false"></div>

		<div class="content">
			<div id="newsletter">
            <form method="post" action="login/validate">
				<input  name="username"  value="username" type="text" />
				<input  name="password"  value="password" type="password" />
				<input class="submit" type="submit" value="" name="submit" id="submit" />
            </form>
			</div><!-- end #newsletter -->
			
			<h2>GetIt is  under construction.</h2>
			
		</div><!-- end #content -->

	</div><!-- end #page -->

</body>

</html>