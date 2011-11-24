
  <!-- ********************** --> 
  <!--      C O N T E N T     -->
  <!-- ********************** --> 
  <div id="content" class="container_16">

    
    <div id="category" class="grid_12">
	 <form  id ="form1" method="post" action="<? echo base_url('frontend/catalogo/search'); ?>">
	<div class = "search">
		<div class = "inputs" >
			<div>Maximo Precio <input type = "text" name="precio"/></div>
		</div>
		<div id = "selectors">
			<div id="marca" class = "switcher">
			 <span class="s_selected" id = "marcaText">Marca</span>
			  <input type = "hidden"  id = "marcaInput"  name ="marca" value = "0"/>
			  <ul class="s_options" id = "marcaOptions">
				<li id = "0" class = "opmarca"  >Default</li>
				<li>--------------------</li>
				<?php if(isset($brands)):foreach($brands as $row):?>
					<li id = "<?php echo $row->IdMarca ;?>" class = "opmarca" ><?php echo $row->Marca; ?></li>
				<?php endforeach; endif;?>
			  </ul>
			  </div>
			  <div id="tipo" class = "switcher">
				<span class="s_selected" id = "tipoText">Tipo</span>
				  <input type = "hidden"  id = "tipoInput" name ="tipo" value = "0"/>
				  <ul class="s_options" id = "tipoOptions">
					<li id = "0"  class = "optipo"  >Default</li>
					<li>--------------------</li>
					<?php if(isset($types)):foreach($types as $row):?>
						<li id = "<?php echo $row->idTipos ;?>" class = "optipo" ><?php echo $row->Tipo; ?></li>
					<?php endforeach; endif;?>
				  </ul>
			  </div>
		  </div>
      <div class = "submit"></div>
	</div>
	</form>
      <div class="clear"></div>

      <div class="s_listing s_list_view clearfix">
	  <?php if(isset($maquinas)):foreach($maquinas as $row):?>
		<div class="s_item clearfix">
          <div class="grid_3 alpha"> 
			  <a class="s_thumb" href="<?php echo base_url()."images/".$row->IdMaquina."/".$row->file_name;?>">
			  <img 
			  src="<?php echo base_url()."images/".$row->IdMaquina."/".$row->file_name;?>" 
			  title="Canon Digital Ixus 200 IS" 
			  alt="Canon Digital Ixus 200 IS" />
			  </a> 
		  </div>
          <div class="grid_9 omega">
            <h3><a href="<?php echo  base_url()."frontend/site/reporte/".$row->IdMaquina; ?>"><?php echo $row->Maquina; ?></a></h3>
            <p class="s_model"><?php echo $row->Modelo; ?></p>
            <p class="s_price"><span class="s_currency s_before">$</span><?php echo $row->Precio; ?></p>
            <p class="s_description"><?php echo $row->Especificaciones; ?></p>
          </div>
        </div>
	  <?php endforeach; endif;?>
	<!--
        <div class="s_item clearfix">
          <div class="grid_3 alpha"> <a class="s_thumb" href="product.html"><img src="<?php echo base_url(); ?>img/frontend/product_140x140.jpg" title="Leica M7" alt="Leica M7" /></a> </div>
          <div class="grid_9 omega">
            <h3><a href="product.html">Leica M7</a></h3>
            <p class="s_model">Product 4</p>
            <p class="s_price s_promo_price"><span class="s_old_price"><span class="s_currency s_before">£</span>940.00</span> <span class="s_currency s_before">£</span>822.50</p>
            <p class="s_description">Engineered with pro-level features and performance, the 12.3-effective-megapixel D300 combines brand new technologies with advanced features inherited from Nikon&#39;s newly announced D3 profes...</p>
            
          </div>
        </div>

        <div class="clear"></div>

        <div class="s_item clearfix">
          <div class="grid_3 alpha"> <a class="s_thumb" href="product.html"><img src="<?php echo base_url(); ?>img/frontend/product_140x140.jpg" title="Canon Digital Ixus 200 IS" alt="Canon Digital Ixus 200 IS" /></a> </div>
          <div class="grid_9 omega">
            <h3><a href="product.html">Canon Digital Ixus 200 IS</a></h3>
            <p class="s_model">Product 7</p>
            <p class="s_price"><span class="s_currency s_before">£</span>117.50</p>
            <p class="s_description">Born to be worn. Clip on the worlds most wearable music player and take up to 240 songs with you anywhere. Choose from five colors including four new hues to make your musical fashion stateme...</p>
            
          </div>
        </div>

        <div class="clear"></div>

        <div class="s_item clearfix">
          <div class="grid_3 alpha"> <a class="s_thumb" href="product.html"><img src="<?php echo base_url(); ?>img/frontend/product_140x140.jpg" title="Casio Exilim Zoom" alt="Casio Exilim Zoom" /></a> </div>
          <div class="grid_9 omega">
            <h3><a href="product.html">Casio Exilim Zoom</a></h3>
            <p class="s_model">Product 7</p>
            <p class="s_price"><span class="s_currency s_before">£</span>117.50</p>
            <p class="s_description">Born to be worn. Clip on the worlds most wearable music player and take up to 240 songs with you anywhere. Choose from five colors including four new hues to make your musical fashion stateme...</p>
            
          </div>
        </div>

        <div class="clear"></div>

        <div class="s_item clearfix">
          <div class="grid_3 alpha"> <a class="s_thumb" href="product.html"><img src="<?php echo base_url(); ?>img/frontend/product_140x140.jpg" title="Samsung P200" alt="Samsung P200" /></a> </div>
          <div class="grid_9 omega">
            <h3><a href="product.html">Samsung P200</a></h3>
            <p class="s_model">Product 6</p>
            <p class="s_price"><span class="s_currency s_before">£</span>235.00</p>
            <p class="s_description">Imagine the advantages of going big without slowing down. The big 19&quot; 941BW monitor combines wide aspect ratio with fast pixel response time, for bigger <?php echo base_url(); ?>img/frontend, more room to work and crisp mot...</p>
            
          </div>
        </div>

        <div class="clear"></div>

        <div class="s_item clearfix">
          <div class="grid_3 alpha"> <a class="s_thumb" href="product.html"><img src="<?php echo base_url(); ?>img/frontend/product_140x140.jpg" title="Panasonic Lumix" alt="Panasonic Lumix" /></a> </div>
          <div class="grid_9 omega">
            <h3><a href="product.html">Panasonic Lumix</a></h3>
            <p class="s_model">Product 4</p>
            <p class="s_price"><span class="s_currency s_before">£</span>94.00</p>
            <p class="s_description"> Engineered with pro-level features and performance, the 12.3-effective-megapixel D300 combines brand new technologies with advanced features inherited from Nikon&#39;s newly announced D3 profes...</p>
            
          </div>
        </div>

        <div class="clear"></div>

        <div class="s_item clearfix last">
          <div class="grid_3 alpha"> <a class="s_thumb" href="product.html"><img src="<?php echo base_url(); ?>img/frontend/product_140x140.jpg" title="Sony Cyber Shot S1000" alt="Sony Cyber Shot S1000" /></a> </div>
          <div class="grid_9 omega">
            <h3><a href="product.html">Sony Cyber Shot S1000</a></h3>
            <p class="s_model">Product 8</p>
            <p class="s_price"><span class="s_currency s_before">£</span>117.50</p>
            <p class="s_description"> Heading Proin ut ornare risus. Sed tristique, massa vel rhoncus tempus, ligula quam ultrices enim, varius euismod neque erat quis sapien. Curabitur eget quam quis magna ultricies aliquam. Ut...</p>
            
          </div>
        </div>

        <div class="clear"></div>
		-->
      </div>
      
      <div class="pagination">
        <div class="results">Showing 1 to 6 of 6 (1 Pages)</div>
      </div>
      
    </div>
    
    <div id="right_col" class="grid_3">
      <div id="cart_side" class="s_box_1 s_cart_holder">
        <h2 class="s_secondary_color">Shopping Cart</h2>
        <div id="cart_side_contents">
          <p class="s_mb_0">0 items</p>
        </div>
      </div>
      
      <div id="categories_module" class="s_box">
        <h2>Categories</h2>
        <div class="s_list_1">
          <ul>
          	<li>
            	<a href="listing_1.html"><b>Electronics</b></a>
            	<ul>
              	<li><a href="listing_1.html">Digital Cameras</a></li>
                <li><a href="listing_1.html">Home Audio</a></li>
                <li><a href="listing_1.html">Home Cinema</a></li>
                <li><a href="listing_1.html">Cell Phones</a></li>
                <li><a href="listing_1.html">MP3 Players</a></li>
                <li><a href="listing_1.html">Car-Audio</a></li>
              </ul>
            </li>
            <li><a href="listing_1.html">Computers</a></li>
            <li><a href="listing_1.html">Clothing</a></li>
            <li><a href="listing_1.html">Shoes</a></li>
            <li><a href="listing_1.html">Gifts</a></li>
            <li><a href="listing_1.html">At home</a></li>
            <li><a href="listing_1.html">Health</a></li>
            <li><a href="listing_1.html">Jewellery</a></li>
            <li><a href="listing_1.html">Books</a></li>
          </ul>
      	</div>
			</div>
      
    	<div id="brands_module" class="s_box">
        <h2>Brands</h2>
        <select onchange="location = this.value">
          <option> --- Please Select --- </option>
          <option>Adidas</option>
          <option>Apple</option>
          <option>Armani</option>
          <option>Balenciaga</option>
          <option>Bvlgari</option>
          <option>Canon</option>
          <option>Christian Dior</option>
          <option>Elisabeth Arden</option>
          <option>Hewlett-Packard</option>
          <option>HTC</option>
          <option>Hugo Boss</option>
          <option>Nike</option>
          <option>Nikon</option>
          <option>Palm</option>
          <option>Panasonic</option>
          <option>Reebok</option>
          <option>Samsung</option>
          <option>Sony</option>
          <option>Swarovski</option>
        </select>
      </div>
      
      <div id="bestseller_side" class="s_box clearfix">
        <h2>Bestsellers</h2>
        <div class="s_item s_size_1 clearfix">
          <a class="s_thumb" href="product.html"><img src="<?php echo base_url(); ?>img/frontend/product_38x38.jpg" width="38" height="38" alt="iPhone 3GS 8GB" /></a>
          <h3><a href="product.html">iPhone 3GS 8GB</a></h3>
          <p><a href="product.html"><span class="s_main_color"><span class="s_currency s_before">£</span>587.50</span></a></p>
        </div>
        
        <div class="s_item s_size_1 clearfix">
          <a class="s_thumb" href="product.html"><img src="<?php echo base_url(); ?>img/frontend/product_38x38.jpg" width="38" height="38" alt="Hubo Boss Emotion" /></a>
          <h3><a href="product.html">Hubo Boss Emotion</a></h3>
          <p><a href="product.html"><span class="s_main_color"><span class="s_currency s_before">£</span>2,350.00</span></a></p>
        </div>
        
        <div class="s_item s_size_1 clearfix">
          <a class="s_thumb" href="product.html"><img src="<?php echo base_url(); ?>img/frontend/product_38x38.jpg" width="38" height="38" alt="Panasonic Lumix" /></a>
          <h3><a href="product.html">Panasonic Lumix</a></h3>
          <p><a href="product.html"><span class="s_main_color"><span class="s_currency s_before">£</span>94.00</span></a></p>
        </div>
        
        <div class="s_item s_size_1 clearfix">
          <a class="s_thumb" href="product.html"><img src="<?php echo base_url(); ?>img/frontend/product_38x38.jpg" width="38" height="38" alt="Casio Exilim Zoom" /></a>
          <h3><a href="product.html">Casio Exilim Zoom</a></h3>
          <p><a href="product.html"><span class="s_main_color"><span class="s_currency s_before">£</span>117.50</span></a></p>
        </div>
  
        <div class="s_item s_size_1 clearfix">
          <a class="s_thumb" href="product.html"><img src="<?php echo base_url(); ?>img/frontend/product_38x38.jpg" width="38" height="38" alt="Christian Dior Amber Woman" /></a>
          <h3><a href="product.html">Christian Dior Amber Woman</a></h3>
          <p><a href="product.html"><span class="s_main_color"><span class="s_currency s_before">£</span>328.99</span></a></p>
        </div>
  
        <div class="s_item s_size_1 clearfix">
          <a class="s_thumb" href="product.html"><img src="<?php echo base_url(); ?>img/frontend/product_38x38.jpg" width="38" height="38" alt="iPod Classic" /></a>
          <h3><a href="product.html">iPod Classic</a></h3>
          <p><a href="product.html"><span class="s_main_color"><span class="s_currency s_before">£</span>117.50</span></a></p>
        </div>
        
        <div class="s_item s_size_1 clearfix">
          <a class="s_thumb" href="product.html"><img src="<?php echo base_url(); ?>img/frontend/product_38x38.jpg" width="38" height="38" alt="Sony VAIO" /></a>
          <h3><a href="product.html">Sony VAIO</a></h3>
          <p><a href="product.html"><span class="s_old"><span class="s_currency s_before">£</span>1,175.00</span> <span class="s_secondary_color"><span class="s_currency s_before">£</span>1,057.50</span></a></p>
          <div class="s_rating_holder clearfix"><p class="s_rating s_rating_small s_rating_5 left"><span style="width: 100%;" class="s_percent"></span></p><span class="left">&nbsp;5/5</span></div>
        </div>
  
        <div class="s_item s_size_1 clearfix">
          <a class="s_thumb" href="product.html"><img src="<?php echo base_url(); ?>img/frontend/product_38x38.jpg" width="38" height="38" alt="Canon Digital Ixus 200 IS" /></a>
          <h3><a href="product.html">Canon Digital Ixus 200 IS</a></h3>
          <p><a href="product.html"><span class="s_main_color"><span class="s_currency s_before">£</span>117.50</span></a></p>
        </div>
    
        <div class="s_item s_size_1 clearfix">
          <a class="s_thumb" href="product.html"><img src="<?php echo base_url(); ?>img/frontend/product_38x38.jpg" width="38" height="38" alt="Hugo Boss Chrome" /></a>
          <h3><a href="product.html">Hugo Boss Chrome</a></h3>
          <p><a href="product.html"><span class="s_main_color"><span class="s_currency s_before">£</span>94.00</span></a></p>
        </div>
    
        <div class="s_item s_size_1 clearfix">
          <a class="s_thumb" href="product.html"><img src="<?php echo base_url(); ?>img/frontend/product_38x38.jpg" width="38" height="38" alt="Hennesy Paradis Extra" /></a>
          <h3><a href="product.html">Hennesy Paradis Extra</a></h3>
          <p><a href="product.html"><span class="s_old"><span class="s_currency s_before">£</span>1,175.00</span> <span class="s_secondary_color"><span class="s_currency s_before">£</span>1,057.50</span></a></p>
        </div>
    
        <div class="s_item s_size_1 clearfix">
          <a class="s_thumb" href="product.html"><img src="<?php echo base_url(); ?>img/frontend/product_38x38.jpg" width="38" height="38" alt="Elizabeth Arden Pretty" /></a>
          <h3><a href="product.html">Elizabeth Arden Pretty</a></h3>
          <p><a href="product.html"><span class="s_main_color"><span class="s_currency s_before">£</span>94.00</span></a></p>
        </div>
    
        <div class="s_item s_size_1 clearfix">
          <a class="s_thumb" href="product.html"><img src="<?php echo base_url(); ?>img/frontend/product_38x38.jpg" width="38" height="38" alt="Sony Cyber Shot S1000" /></a>
          <h3><a href="product.html">Sony Cyber Shot S1000</a></h3>
          <p><a href="product.html"><span class="s_main_color"><span class="s_currency s_before">£</span>117.50</span></a></p>
        </div>
      </div>
    
      <div id="information_module" class="s_box">
        <h2>Information</h2>
        <ul class="s_list_1">
          <li><a href="static.html">About Shoppica</a></li>
          <li><a href="static.html">Privacy Policy</a></li>
          <li><a href="static.html">Terms &amp; Conditions</a></li>
          <li><a href="contacts.html">Contact Us</a></li>
          <li><a href="sitemap.html">Site Map</a></li>
        </ul>
      </div>
  
      <div id="featured_side" class="s_box clearfix">
        <h2>Featured</h2>
        <div class="s_item s_size_1 clearfix">
          <a class="s_thumb" href="product.html"><img src="<?php echo base_url(); ?>img/frontend/product_38x38.jpg" width="38" height="38" alt="White football trainers" /></a>
          <h3><a href="product.html">White football trainers</a></h3>
          <p><a href="product.html"><span class="s_main_color"><span class="s_currency s_before">£</span>117.50</span></a></p>
        </div>
        <div class="s_item s_size_1 clearfix">
          <a class="s_thumb" href="product.html"><img src="<?php echo base_url(); ?>img/frontend/product_38x38.jpg" width="38" height="38" alt="Hubo Boss Emotion" /></a>
          <h3><a href="product.html">Hubo Boss Emotion</a></h3>
          <p><a href="product.html"><span class="s_main_color"><span class="s_currency s_before">£</span>2,350.00</span></a></p>
        </div>
        <div class="s_item s_size_1 clearfix">
          <a class="s_thumb" href="product.html"><img src="<?php echo base_url(); ?>img/frontend/product_38x38.jpg" width="38" height="38" alt="Christian Dior J'adore" /></a>
          <h3><a href="product.html">Christian Dior J'adore</a></h3>
          <p><a href="product.html"><span class="s_main_color"><span class="s_currency s_before">£</span>328.99</span></a></p>
        </div>
      </div>

    </div>
    
  </div>
  <!-- end of content -->