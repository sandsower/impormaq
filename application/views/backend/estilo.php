<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en" xml:lang="en" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Impormaq</title>
<meta name="description" content="My Store" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/frontend/960.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/frontend/screen.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/frontend/color.css" media="screen" />
<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="stylesheet/ie.css" media="screen" />
<![endif]-->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/frontend/shoppica.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/frontend/jquery/colorpicker/colorpicker.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/frontend/jquery/jquery.cookie.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/frontend/colorpicker/colorpicker.css" media="all" />
<link rel="stylesheet" href="<?php echo base_url(); ?>css/frontend/cp.css" type="text/css" />
</head>

<body class="s_layout_fixed">
<div style="height:30px;  vertical-align:center; text-align:right; margin-right:100px; padding:.25em 0 0 0;">
	<a  href="<?php echo base_url(); ?>backend/site">Regresar</a>
</div> 
<hr/>
<?php $this->load->view('backend/cp'); ?>
<pre>
<?php //print_r($data); ?>
</pre>
<div id="wrapper"> 
  <!-- ********************** --> 
  <!--      H E A D E R       --> 
  <!-- ********************** -->
  <div id="header" class="container_12">
    <div class="grid_12">
    
    	<a id="site_logo" href="index.html">Impormaq store</a> 
      <div id="system_navigation" class="s_nav">
        <ul class="s_list_1 clearfix">
          <li><a href="<?php echo base_url(); ?>frontend/site">Inicio</a></li>
          <li><a href="<?php echo base_url(); ?>frontend/nosotros">Nosotros</a></li>
          <li><a href="<?php echo base_url(); ?>frontend/catalogo">Catalogo</a></li>
          <li><a href="<?php echo base_url(); ?>frontend/ubicacion">Donde encontrarnos?</a></li>
          <li><a href="<?php echo base_url(); ?>frontend/contacto">Contacto</a></li>
          <li><a href="<?php echo base_url(); ?>login">Entrar</a></li>
        </ul>
      </div>

      <div id="site_search">
      	<a id="show_search" href="javascript:;" title="Search:"></a>
        <div id="search_bar" class="clearfix">
          <input type="text" id="filter_keyword" />
          <select id="filter_category_id">
            <option value="0">Todas las categor&iacute;as</option>
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
          <li><a href=""><img src="<?php echo base_url(); ?>img/frontend/flags/mx.png" alt="Deutsch" /> Espa&ntilde;ol</a></li>
          <li><a href=""><img src="<?php echo base_url(); ?>img/frontend/flags/gb.png" alt="English" /> English</a></li>
        </ul>
      </div>
      
      <div id="categories" class="s_nav">
        <ul>
          <li id="menu_home"> <a href="<?php echo base_url(); ?>frontend/site">Home</a> </li>
          <?php if(isset($tipos)) : foreach($tipos as $row) : ?>
            <li> <a href="#"><?php echo $row->Tipo; ?></a></li>
          <?php endforeach; endif; ?>
        </ul>
      </div>
      
      <div id="cart_menu" class="s_nav">
      	<a href="cart.html"><span class="s_icon"></span> <small class="s_text">Cart</small><span class="s_grand_total s_main_color">$0.00</span></a>
        <div class="s_submenu s_cart_holder">
          <p class="s_mb_0">0 items</p>
        </div>
      </div>
      
    </div>
  </div>
  <!-- end of header --> 
  

  <!-- ********************** --> 
  <!--     I N T R O          --> 
  <!-- ********************** --> 
    <div id="intro">
    <div id="intro_wrap">
      <div id="product_intro" class="container_12">
        <div id="product_intro_info" class="grid_5">
          <div style="position: relative;">
            <h2><a href="#">Archivo de promoci&oacute;n</a></h2>
            <div class="s_rating_holder">
              <p class="s_rating s_rating_big s_rating_5"> <span style="width: 60%;" class="s_percent"></span> </p>
              <span class="s_average">3 out of 5</span> </div>
            <p class="s_desc"> Texto Promocional</p>
            <div class="s_price_holder">
              <p class="s_price"> <span class="s_currency s_before">$</span>384.67 </p>
            </div>
          </div>
          <?php if(isset($promociones)) : foreach($promociones as $row) : ?>
            <div style="position: relative; display: none;">
            <h2><a href="#"><?php echo $row->TituloPromocional; ?></a></h2>
            <p class="s_desc"><?php echo $row->TextoPromocional; ?></p>
            <div class="s_price_holder">
              <p class="s_price"> <span class="s_currency s_before">$</span><?php echo $row->PrecioPromocional; ?> </p>
            </div>
          </div>
          <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div id="product_intro_preview">
          <div class="slides_container">
          <div class="slideItem" style="display: none"><a href="#"><img src="<?php echo base_url(); ?>img/frontend/product_300x300.jpg" alt="" /></a></div>
          <?php if(isset($promociones)) : foreach($promociones as $row) : ?>
            <div class="slideItem" style="display: none"><a href="#"><img src="<?php echo base_url().'images/'. $row->IdMaquina.'/promo/'.$row->file_name; ?>" alt="" /></a></div>
            <?php endforeach; ?>
            <?php endif; ?>
          </div>
          <a class="s_button_prev" href="javascript:;"></a>
          <a class="s_button_next" href="javascript:;"></a>
        </div>
      </div>
    </div>
  </div>
          <a class="s_button_prev" href="javascript:;"></a>
          <a class="s_button_next" href="javascript:;"></a>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/frontend/jquery/jquery.slides.js"></script> 
    <script type="text/javascript" src="<?php echo base_url(); ?>js/frontend/shoppica.products_slide.js"></script> </div>
  <!-- end of intro --> 
  <!-- end of intro --> 
  
  
  <!-- ********************** --> 
  <!--      C O N T E N T     --> 
  <!-- ********************** --> 
  <div id="content" class="container_12">
    <div id="special_home" class="grid_12">
      <h2 class="s_title_1"><span class="s_main_color">Productos</span> especiales</h2>
      <div class="clear"></div>
      <div class="s_listing s_grid_view clearfix">
        
        <?php if(isset($maquinas)) : foreach($maquinas as $row) : ?>
 
         <div class="s_item grid_2"> <a class="s_thumb" href="product.html"><img src="<?php echo base_url().'images/'. $row->IdMaquina.'/thumbs/'.$row->file_name ;?>" title="Maquina 1" alt="Maquina 1" /></a>
          <h3><a href="product.html"><?php echo $row->Maquina; ?></a></h3>
          <p class="s_model"><?php echo $row->Modelo; ?></p>
          <p class="s_price s_promo_price"><span class="s_old_price"><span class="s_currency s_before">$</span><?php echo $row->Precio; ?></span><span class="s_currency s_before">$</span>1,346.35</p>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>

        <div class="s_item grid_2"> <a class="s_thumb" href="product.html"><img src="<?php echo base_url(); ?>img/frontend/product_140x140.jpg" title="Maquina 1" alt="Maquina 1" /></a>
          <h3><a href="product.html">Maquina 1</a></h3>
          <p class="s_model">Product 4</p>
          <p class="s_price s_promo_price"><span class="s_old_price"><span class="s_currency s_before">$</span>1,538.69</span><span class="s_currency s_before">$</span>1,346.35</p>
        </div>

        <div class="s_item grid_2"> <a class="s_thumb" href="product.html"><img src="<?php echo base_url(); ?>img/frontend/product_140x140.jpg" title="Maquina 1" alt="Maquina 1" /></a>
          <h3><a href="product.html">Maquina 2</a></h3>
          <p class="s_model">Product 4</p>
          <p class="s_price s_promo_price"><span class="s_old_price"><span class="s_currency s_before">$</span>1,538.69</span><span class="s_currency s_before">$</span>1,346.35</p>
        </div>
        
        <div class="clear"></div>
      </div>
    </div>
    
    
    <div id="latest_home" class="grid_12">
      <h2 class="s_title_1"><span class="s_main_color">Productos</span> Recientes</h2>
      <div class="clear"></div>
      <div class="s_listing s_grid_view clearfix">
      <pre>
      <?php //print_r($maquinas); ?>
      </pre>
      <?php if(isset($maquinas)) : foreach($maquinas as $row) : ?>
 
        <div class="s_item grid_2"> <a class="s_thumb" href="#"><img src="<?php echo base_url().'images/'. $row->IdMaquina.'/thumbs/'.$row->file_name ;?>" /></a>
          <h3><a href="product.html"><?php echo $row->Maquina; ?></a></h3>
          <p class="s_model"><?php echo $row->Modelo; ?></p>
          <p class="s_price"><span class="s_currency s_before">$</span><?php echo $row->Precio; ?></p>
          
        </div>
        <?php endforeach; ?>
        <?php endif; ?>
        
        <div class="clear"></div>
      </div>
    </div>
 
  <!-- end of content --> 
  
  <!-- ********************** --> 
  <!--   S H O P   I N F O    --> 
  <!-- ********************** --> 
  <div id="shop_info">
   <p id="copy">Impormaq S.A. de C.V. &copy; Copyright 2011. Powered by <a class="blue" href="#">GetIt </a>.<br /> </p>
  </div>
  <!-- end of shop info --> 
  </div>
  <!-- end of FOOTER --> 
  
</div>


</body>
</html>
