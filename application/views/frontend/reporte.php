
  <!-- ********************** --> 
  <!--     I N T R O          -->
  <!-- ********************** --> 

  <div id="intro">
    <div id="intro_wrap">
      <div class="container_12">
        <div id="breadcrumbs" class="grid_12">
          <a href="">Home</a>
          &gt;
          <a href=""><?php echo $maquina->Type; ?></a>
        </div>
        <h1><?php echo $maquina->Maquina; ?></h1>
      </div>
    </div>
  </div>
  <!-- end of intro -->

  
  <!-- ********************** --> 
  <!--      C O N T E N T     -->
  <!-- ********************** --> 
  <div id="content" class="product_view container_12">

    <div id="product" class="grid_image">
      <div id="product_images" class="grid_4 alpha">
		<div id = 'image_main'>
			<a  id = "link" rel="prettyPhoto[gallery]" href="<?php echo base_url().'images/'. $maquina->IdMaquina.'/'.$main->file_name ;?>">
			<img  class = "main<?php echo $maquina->IdMaquina; ?>" width = "258"  height = "250"  src="<?php echo base_url().'images/'. $maquina->IdMaquina.'/'.$main->file_name ;?>" title="Leica M7" alt="Leica M7" />
			</a>
		</div>
		<div id = "detail">
			<?php if(isset($detail)) : foreach($detail as $image) :?>
				<div class="image" >
					<img  class = "img" width = "50"  height = "50" src = "<?php echo base_url().'images/'. $maquina->IdMaquina.'/thumbs/'.$image->file_name ;?>" />
				</div>
			<?php endforeach; ?>
			<?php endif; ?>
		</div>
      </div>
	
      <div id="product_info" class="grid_4">
        <p class="s_price">
		<?php echo '$'.$maquina->Precio; ?>
		<span class="s_currency s_after"> pesos</span>
		</p>
        <dl class="clearfix">
          <dt>Tipo:</dt>
          <dd><?php echo $maquina->Type; ?></dd>
          <dt>Marca:</dt>
          <dd><?php echo $maquina->Marca; ?></dd>
          <dt>Modelo</dt>
          <dd><?php echo $maquina->Modelo; ?></dd>
          <dt>Average Rating</dt>
          <dd>
            <p class="s_rating s_rating_5"><span style="width: 100%;" class="s_percent"></span></p>
          </dd>
		  <dt>Especificaciones:</dt>
		  <p class="s_short_desc"><?php echo $maquina->Especificaciones; ?></p>
        </dl>
		
        <div id="product_share" class="clearfix">
          <!-- AddThis Button BEGIN -->
          <div class="addthis_toolbox addthis_default_style ">
          <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
          <a class="addthis_button_tweet"></a>
          <a class="addthis_counter addthis_pill_style"></a>
          </div>
          <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4de0eff004042e7a"></script>
          <!-- AddThis Button END -->
        </div>
      </div>
      <div class="grid_4 omega">
      	<div class="suffix_2 left s_999">
        	<p>Including 12% VAT</p>
          <p class="s_f_11"><strong>Free delivery</strong> for purchases over 200$ for all the United Kingdom</p>
        </div>
        <div id="product_options">
          <h3>Available Options</h3>
          <label for="option_Memory">Memory</label>
          <select id="option_Memory">
            <option value="676">1 GB +29.38 eur</option>
            <option value="677">2 GB +47.00 eur</option>
          </select>
          <span class="clear"></span>
        </div>
        <div id="product_buy" class="clearfix">
          <label for="product_buy_quantity">Qty:</label>
          <input id="product_buy_quantity" type="text" size="2" />
          <a id="add_to_cart" class="s_main_color_bgr"><span class="s_text"><span class="s_icon"></span> Add to Cart</span></a>
        </div>
      </div>
      <div class="clear"></div>
	</div>
</div>

  <!-- end of content -->

  
  