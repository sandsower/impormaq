<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en" xml:lang="en" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Impormaq</title>
<meta name="description" content="My Store" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/frontend/960.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/frontend/screen.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/frontend/color.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/frontend/report.css" media="screen" />
<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="stylesheet/ie.css" media="screen" />
<![endif]-->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/frontend/shoppica.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>scf/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>scf/js/popup.js"></script>


</head>

<body>

<pre>
<?php //print_r($tipos);?>
</pre>


<div id="mask"></div>
<div id="wrapper"> 
  
  <!-- ********************** --> 
  <!--      H E A D E R       --> 
  <!-- ********************** -->
  <div id="header" class="container_12">
    <div class="grid_12">
    
      <a id="site_logo" href="site">Shoppica store - Premium e-Commerce Theme</a> 

      <div id="system_navigation" class="s_nav">
        <ul class="s_list_1 clearfix">
          <li><a href="<?php echo base_url(); ?>site">Inicio</a></li>
          <li><a href="<?php echo base_url(); ?>nosotros">Nosotros</a></li>
          <li><a href="<?php echo base_url(); ?>catalogo">Catalogo</a></li>
          <li><a href="<?php echo base_url(); ?>ubicacion">Donde encontrarnos?</a></li>
          <li><a href="<?php echo base_url(); ?>contacto">Contacto</a></li>
          <li><a href="<?php echo base_url(); ?>login">Entrar</a></li>
        </ul>
      </div>

      <div id="site_search">
        <a id="show_search" href="javascript:;" title="Search:"></a>
        <div id="search_bar" class="clearfix">
          <input type="text" id="filter_keyword" />
          <select id="filter_category_id">
            <option value="0">All Categories</option>
            <option value="1">Category 1</option>
            <option value="2">Category 2</option>
          </select>
          <a class="s_button_1 s_secondary_color_bgr"><span class="s_text">Go</span></a> 
        </div>
      </div>
      
      <div id="language_switcher" class="s_switcher"> <span class="s_selected">Pesos</span>
        <ul class="s_options">
          <li><a href="">Pesos</a></li>
          <li><a href="">US Dollar</a></li>
        </ul>
      </div>
      
      <div id="currency_switcher" class="s_switcher"> <span class="s_selected"><img src="<?php echo base_url(); ?>img/frontend/flags/mx.png" alt="English" /> Espa&ntilde;ol</span>
        <ul class="s_options">
          <li><a href=""><img src="<?php echo base_url(); ?>img/frontend/flags/gb.png" alt="English" /> English</a></li>
          <li><a href=""><img src="<?php echo base_url(); ?>img/frontend/flags/mx.png" alt="Deutsch" /> Espa&ntilde;ol</a></li>
        </ul>
      </div>
      
      <div id="categories" class="s_nav">
        <ul>
          <li id="menu_home"> <a href="<?php echo base_url(); ?>frontend/site">Home</a> </li>
          <?php if(isset($tipos)) : foreach($tipos as $row) : ?>
            <li> <a href="<?php echo base_url()."frontend/catalogo/showCategory/".$row->idTipos; ?>"><?php echo $row->Tipo; ?></a></li>
          <?php endforeach; endif; ?>
        </ul>
      </div>

      <!--
      <div id="cart_menu" class="s_nav">
        <a href="cart.html"><span class="s_icon"></span> <small class="s_text">Cart</small><span class="s_grand_total s_main_color">$0.00</span></a>
        <div class="s_submenu s_cart_holder">
          <p class="s_mb_0">0 items</p>
        </div>
      </div>
      -->
      
    </div>
  </div>
  <!-- end of header --> 
  