<pre>
<?php //print_r($maquinas); ?>
</pre>

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
            <div class="s_rating_holder">
              <p class="s_rating s_rating_big s_rating_5"> <span style="width: 60%;" class="s_percent"></span> </p>
              <span class="s_average">3 out of 5</span> </div>
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
  
  
  <!-- ********************** --> 
  <!--      C O N T E N T     --> 
  <!-- ********************** --> 
  <div id="content" class="container_12">
    <div id="welcome" class="grid_12">
      <h2>Bienvenido a Getit </h2>
      <p> <a href="">GetIt</a> es una tienda electronica estilizada con un dise&ntilde;o limpio e inovador que te permite usar una diferente combinacion de colores.</p>
      <p>Una caracteristica adicional es escoger entre diferentes tipos de presentacones de tus productos por cada categoria, asi que tu puedes personalizar cada parte de tu tienda.
      Getit Te permite modificar el tama&ntilde;o de tus productos, tama&no de lista, posiciones de columnas, dandote el poder de adaptar facilmente cualquier tema a tu producto o servicio. Con la herramienta de colores puedes cambiar los elementos de tu sitio haciendolo unico y restaltando de todos los demas.</p>
    </div>
    
    <div class="clear"></div>

    
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
    
  </div>
  <!-- end of content --> 

  
  