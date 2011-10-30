<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en" xml:lang="en" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Your Store</title>
<meta name="description" content="My Store" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/frontend/960.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/frontend/screen.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/frontend/color.css" media="screen" />
<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="stylesheet/ie.css" media="screen" />
<![endif]-->

<script type="text/javascript" src="<?php echo base_url(); ?>http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?><?php echo base_url(); ?>js/frontend/shoppica.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?><?php echo base_url(); ?>scf/js/jquery.js"></script>
<script type="text/javascript">

$(document).ready(function() {

  $(".s_tabs").tabs({ fx: { opacity: 'toggle', duration: 300 } });

  $("#product_images a[rel^='prettyPhoto'], #product_gallery a[rel^='prettyPhoto']").prettyPhoto({
    theme: 'light_square',
    opacity: 0.5
  });

});

</script>

</head>

<body class="s_layout_fixed">

<div id="wrapper"> 
  
  <!-- ********************** --> 
  <!--      H E A D E R       --> 
  <!-- ********************** --> 
  <div id="header" class="container_12">
    <div class="grid_12">
    
    	<a id="site_logo" href="index.html">Shoppica store - Premium e-Commerce Theme</a> 

      <div id="system_navigation" class="s_nav">
        <ul class="s_list_1 clearfix">
          <li><a href="index.html">Home</a></li>
          <li><a href="login.html">Log In</a></li>
          <li><a href="cart.html">Shopping Cart</a></li>
          <li><a href="static.html">About Us</a></li>
          <li><a href="contacts.html">Contact</a></li>
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
          <a class="s_button_1 s_secondary_color_bgr"><span class="s_text">Go</span></a> <a class="s_advanced s_main_color" href="">Advanced Search</a>
        </div>
      </div>
      
      <div id="language_switcher" class="s_switcher"> <span class="s_selected">US Dollar</span>
        <ul class="s_options">
          <li><a href="">Euro</a></li>
          <li><a href="">Pound Sterling</a></li>
          <li><a href="">US Dollar</a></li>
        </ul>
      </div>
      
      <div id="currency_switcher" class="s_switcher"> <span class="s_selected"><img src="<?php echo base_url(); ?>images/flags/gb.png" alt="English" /> English</span>
        <ul class="s_options">
          <li><a href=""><img src="<?php echo base_url(); ?>images/flags/gb.png" alt="English" /> English</a></li>
          <li><a href=""><img src="<?php echo base_url(); ?>images/flags/de.png" alt="Deutsch" /> Deutsch</a></li>
        </ul>
      </div>
      
      <div id="categories" class="s_nav">
        <ul>
          <li id="menu_home"> <a href="index.html">Home</a> </li>
          <li> <a href="listing_1.html">Electronics</a>
            <div class="s_submenu">
              <h3>Inside Electronics</h3>
              <ul class="s_list_1 clearfix">
                <li> <a href="listing_1.html">Digital Cameras</a>
                  <ul class="s_list_1 clearfix">
                    <li><a href="listing_1.html">Compact Cameras</a></li>
                    <li><a href="listing_1.html">Digital SLR</a></li>
                  </ul>
                </li>
                <li><a href="listing_1.html">Home Audio</a></li>
                <li><a href="listing_1.html">Home Cinema</a></li>
                <li><a href="listing_1.html">Cell Phones</a></li>
                <li><a href="listing_1.html">MP3 Players</a></li>
                <li><a href="listing_1.html">Car-Audio</a></li>
              </ul>
              <span class="clear border_eee"></span>
              <h3>Electronics Brands</h3>
              <ul class="s_list_1 clearfix">
                <li><a href="listing_1.html">Canon</a></li>
                <li><a href="listing_1.html">Hugo Boss</a></li>
                <li><a href="listing_1.html">Panasonic</a></li>
                <li><a href="listing_1.html">Samsung</a></li>
                <li><a href="listing_1.html">Sony</a></li>
              </ul>
            </div>
          </li>
          <li> <a href="listing_1.html">Computers</a>
            <div class="s_submenu">
              <h3>Inside Computers</h3>
              <ul class="s_list_1 clearfix">
                <li><a href="listing_1.html">Desktops</a></li>
                <li><a href="listing_1.html">Laptops</a></li>
                <li><a href="listing_1.html">Monitors</a></li>
                <li><a href="listing_1.html">Components</a></li>
                <li><a href="listing_1.html">Software</a></li>
              </ul>
              <span class="clear border_eee"></span>
              <h3>Computers Brands</h3>
              <ul class="s_list_1 clearfix">
                <li><a href="listing_1.html">Hugo Boss</a></li>
                <li><a href="listing_1.html">Sony</a></li>
              </ul>
            </div>
          </li>
          <li><a href="listing_1.html">Clothing</a>
            <div class="s_submenu">
              <h3>Inside Clothing</h3>
              <ul class="s_list_1 clearfix">
                <li><a href="listing_1.html">Women's Clothing</a></li>
                <li><a href="listing_1.html">Men's Clothing</a></li>
                <li><a href="listing_1.html">Boys</a></li>
                <li><a href="listing_1.html">Girls</a></li>
                <li><a href="listing_1.html">Infants and toddlers</a></li>
              </ul>
              <span class="clear border_eee"></span>
              <h3>Clothing Brands</h3>
              <ul class="s_list_1 clearfix">
                <li><a href="listing_1.html">Bvlgari</a></li>
                <li><a href="listing_1.html">Elisabeth Arden</a></li>
              </ul>
            </div>
          </li>
          <li><a href="listing_1.html">Shoes</a>
            <div class="s_submenu">
              <h3>Inside Shoes</h3>
              <ul class="s_list_1 clearfix">
                <li><a href="listing_1.html">Women's Shoes</a></li>
                <li><a href="listing_1.html">Men's Shoes</a></li>
                <li><a href="listing_1.html">Kids' Shoes</a></li>
                <li><a href="listing_1.html">Sportswear</a></li>
              </ul>
              <span class="clear border_eee"></span>
              <h3>Shoes Brands</h3>
              <ul class="s_list_1 clearfix">
                <li><a href="listing_1.html">Adidas</a></li>
                <li><a href="listing_1.html">Apple</a></li>
                <li><a href="listing_1.html">Armani</a></li>
                <li><a href="listing_1.html">Balenciaga</a></li>
                <li><a href="listing_1.html">Christian Dior</a></li>
                <li><a href="listing_1.html">Nike</a></li>
                <li><a href="listing_1.html">Samsung</a></li>
                <li><a href="listing_1.html">Sony</a></li>
              </ul>
            </div>
          </li>
          <li><a href="listing_1.html">Gifts</a>
            <div class="s_submenu">
              <h3>Inside Gifts</h3>
              <ul class="s_list_1 clearfix">
                <li><a href="listing_1.html">Perfumes</a></li>
                <li><a href="listing_1.html">Spirits and Beers</a></li>
                <li><a href="listing_1.html">Wines</a></li>
                <li><a href="listing_1.html">Flowers</a></li>
                <li><a href="listing_1.html">Chocolates and sweets</a></li>
                <li><a href="listing_1.html">Toys and Games</a></li>
                <li><a href="listing_1.html">Pets</a></li>
              </ul>
              <span class="clear border_eee"></span>
              <h3>Gifts Brands</h3>
              <ul class="s_list_1 clearfix">
                <li><a href="listing_1.html">Adidas</a></li>
                <li><a href="listing_1.html">Armani</a></li>
                <li><a href="listing_1.html">Balenciaga</a></li>
                <li><a href="listing_1.html">Bvlgari</a></li>
                <li><a href="listing_1.html">Canon</a></li>
                <li><a href="listing_1.html">Christian Dior</a></li>
                <li><a href="listing_1.html">Elisabeth Arden</a></li>
                <li><a href="listing_1.html">Hugo Boss</a></li>
                <li><a href="listing_1.html">Sony</a></li>
              </ul>
            </div>
          </li>
          <li><a href="listing_1.html">At home</a>
            <div class="s_submenu">
              <h3>Inside At home</h3>
              <ul class="s_list_1 clearfix">
                <li><a href="listing_1.html">Furniture</a></li>
                <li><a href="listing_1.html">Garden</a></li>
                <li><a href="listing_1.html">Appliances</a></li>
                <li><a href="listing_1.html">Pet Supplies</a></li>
                <li><a href="listing_1.html">Tools and Accessories</a></li>
                <li><a href="listing_1.html">Lighting</a></li>
                <li><a href="listing_1.html">Food and Drink</a></li>
              </ul>
            </div>
          </li>
          <li><a href="listing_1.html">Health</a>
            <div class="s_submenu">
              <h3>Inside Health</h3>
              <ul class="s_list_1 clearfix">
                <li><a href="listing_1.html">Suplements</a></li>
                <li><a href="listing_1.html">Cosmetics</a></li>
                <li><a href="listing_1.html">Personal Care</a></li>
              </ul>
            </div>
          </li>
          <li><a href="listing_1.html">Jewellery</a>
            <div class="s_submenu">
              <h3>Inside Jewellery</h3>
              <ul class="s_list_1 clearfix">
                <li><a href="listing_1.html">Necklaces</a></li>
                <li><a href="listing_1.html">Rings</a></li>
                <li><a href="listing_1.html">Bracelets</a></li>
                <li><a href="listing_1.html">Earrings</a></li>
                <li><a href="listing_1.html">Pendants</a></li>
              </ul>
            </div>
          </li>
          <li><a href="listing_1.html">Books</a>
            <div class="s_submenu">
              <h3>Inside Books</h3>
              <ul class="s_list_1 clearfix">
                <li><a href="listing_1.html">Fantasy</a></li>
                <li><a href="listing_1.html">Love Stories</a></li>
                <li><a href="listing_1.html">Science Fiction</a></li>
                <li><a href="listing_1.html">Educational</a></li>
              </ul>
            </div>
          </li>
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
      <div class="container_12">
        <div id="breadcrumbs" class="grid_12">
          <a href="">Home</a>
          &gt;
          <a href="">Clothing</a>
        </div>
        <h1>Clothing</h1>
      </div>
    </div>
  </div>
  <!-- end of intro -->

  
  <!-- ********************** --> 
  <!--      C O N T E N T     -->
  <!-- ********************** --> 
  <div id="content" class="product_view container_12">

    <div id="product" class="grid_12">
      <div id="product_images" class="grid_4 alpha">
      	<a id="product_image_preview" rel="prettyPhoto[gallery]" href="<?php echo base_url(); ?>images/product_300x300.jpg"><img id="image" src="<?php echo base_url(); ?>images/product_300x300.jpg" title="Leica M7" alt="Leica M7" width = '300' height = "300" /></a>
      </div>
      <div id="product_info" class="grid_4">
        <p class="s_price s_promo_price"><span class="s_old_price">940.00<span class="s_currency s_after"> eur</span></span> 822.50<span class="s_currency s_after"> eur</span></p>
        <dl class="clearfix">
          <dt>Availability</dt>
          <dd>In Stock</dd>
          <dt>Model</dt>
          <dd>Product 4</dd>
          <dt>Manufacturer</dt>
          <dd><a href="#">Canon</a></dd>
          <dt>Average Rating</dt>
          <dd>
            <p class="s_rating s_rating_5"><span style="width: 100%;" class="s_percent"></span></p>
          </dd>
        </dl>
      	<p class="s_short_desc">Engineered with pro-level features and performance, the 12.3-effective-megapixel D300 combines brand new technologies with advanced features inherited from Nikon's newly announced D3 professional digital SLR camera to offer serious photographers remarkable performance combined with agility.</p>
        <div id="product_share" class="clearfix">
          <!-- AddThis Button BEGIN -->
          <div class="addthis_toolbox addthis_default_style ">
          <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
          <a class="addthis_button_tweet"></a>
          <a class="addthis_counter addthis_pill_style"></a>
          </div>
          <script type="text/javascript" src="<?php echo base_url(); ?>http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4de0eff004042e7a"></script>
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
      <div class="s_tabs grid_12 alpha omega">
        <ul class="s_tabs_nav clearfix">
          <li><a href="#product_description">Description</a></li>
          <li><a href="#product_reviews">Reviews (0)</a></li>
          <li><a href="#product_gallery">Photos (2)</a></li>
        </ul>
        <div class="s_tab_box">
        
          <div id="product_description">
            <div class="cpt_product_description ">
              Engineered with pro-level features and performance, the 12.3-effective-megapixel D300 combines brand new technologies with advanced features inherited from Nikon&#39;s newly announced D3 professional digital SLR camera to offer serious photographers remarkable performance combined with agility.<br />
              <br />
              Similar to the D3, the D300 features Nikon&#39;s exclusive EXPEED Image Processing System that is central to driving the speed and processing power needed for many of the camera&#39;s new features. The D300 features a new 51-point autofocus system with Nikon&#39;s 3D Focus Tracking feature and two new LiveView shooting modes that allow users to frame a photograph using the camera&#39;s high-resolution LCD monitor. The D300 shares a similar Scene Recognition System as is found in the D3; it promises to greatly enhance the accuracy of autofocus, autoexposure, and auto white balance by recognizing the subject or scene being photographed and applying this information to the calculations for the three functions.<br />
              <br />
              The D300 reacts with lightning speed, powering up in a mere 0.13 seconds and shooting with an imperceptible 45-millisecond shutter release lag time. The D300 is capable of shooting at a rapid six frames per second and can go as fast as eight frames per second when using the optional MB-D10 multi-power battery pack. In continuous bursts, the D300 can shoot up to 100 shots at full 12.3-megapixel resolution. (NORMAL-LARGE image setting, using a SanDisk Extreme IV 1GB CompactFlash card.)<br />
              <br />
              The D300 incorporates a range of innovative technologies and features that will significantly improve the accuracy, control, and performance photographers can get from their equipment. Its new Scene Recognition System advances the use of Nikon&#39;s acclaimed 1,005-segment sensor to recognize colors and light patterns that help the camera determine the subject and the type of scene being photographed before a picture is taken. This information is used to improve the accuracy of autofocus, autoexposure, and auto white balance functions in the D300. For example, the camera can track moving subjects better and by identifying them, it can also automatically select focus points faster and with greater accuracy. It can also analyze highlights and more accurately determine exposure, as well as infer light sources to deliver more accurate white balance detection.
            </div>
            <!-- cpt_container_end -->
          </div>

          <div id="product_reviews" class="s_listing">
            <div class="s_review last">
              <p class="s_author"><strong>Shoppica</strong><small>(29/03/2011)</small></p>
              <div class="right">
                <div class="s_rating_holder">
                  <p class="s_rating s_rating_5"><span class="s_percent" style="width: 100%;"></span></p>
                  <span class="s_average">5 out of 5 Stars!</span>
                </div>
              </div>
              <div class="clear"></div>
              <p>Vestibulum molestie tellus rhoncus nulla cursus quis dictum orci laoreet! metus. Vestibulum molestie tellus rhoncus nulla cursus quis dictum orci laoreet! metus.</p>
            </div>
            <div class="pagination"><div class="results">Showing 1 to 1 of 1 (1 Pages)</div></div>
            <h2 class="s_title_1"><span class="s_main_color">Write</span> Review</h2>
            <div id="review_title" class="clear"></div>
            <div class="s_row_3 clearfix">
              <label><strong>Your Name:</strong></label>
              <input type="text" />
            </div>
            <div class="s_row_3 clearfix">
              <label><strong>Your Review:</strong></label>
              <textarea style="width: 98%;" rows="8" cols="50"></textarea>
              <p class="s_legend"><span style="color: #FF0000;">Note:</span> HTML is not translated!</p>
            </div>
            <div class="s_row_3 clearfix">
              <label><strong>Rating</strong></label>
              <span class="clear"></span> <span>Bad</span>&nbsp;
              <input type="radio" />
              &nbsp;
              <input type="radio" />
              &nbsp;
              <input type="radio" />
              &nbsp;
              <input type="radio" />
              &nbsp;
              <input type="radio" />
              &nbsp; <span>Good</span>
            </div>
            <span class="clear border_ddd"></span>
            <a class="s_button_1 s_main_color_bgr"><span class="s_text">Continue</span></a> <span class="clear"></span> </div>
          <div id="product_gallery">
            <ul class="s_thumbs clearfix">
              <li><a class="s_thumb" href="images/product_300x300.jpg" title="Leica M7" rel="prettyPhoto[gallery]"><img src="<?php echo base_url(); ?>images/product_140x140.jpg" width="120" title="Leica M7" alt="Leica M7" /></a></li>
              <li><a class="s_thumb" href="images/product_300x300.jpg" title="Leica M7" rel="prettyPhoto[gallery]"><img src="<?php echo base_url(); ?>images/product_140x140.jpg" width="120" title="Leica M7" alt="Leica M7" /></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div id="related_products_1" class="grid_12 alpha omega">
        <h2 class="s_title_1"><span class="s_main_color">Related</span> Products</h2>
        <div class="clear"></div>
        <div class="s_grid_view s_listing clearfix">
          <div class="s_item grid_3">
          	<a class="s_thumb" href="product.html"><img src="<?php echo base_url(); ?>images/product_140x140.jpg" title="Panasonic Lumix" alt="Panasonic Lumix" /></a>
            <h3><a href="product.html">Panasonic Lumix</a></h3>
            <p class="s_model">Product 4</p>
            <p class="s_price">94.00<span class="s_currency s_after"> eur</span></p>
            <a class="s_button_add_to_cart" href="cart.html"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></a>
          </div>
          <div class="s_item grid_3">
          	<a class="s_thumb" href="product.html"><img src="<?php echo base_url(); ?>images/product_140x140.jpg" title="Panasonic Lumix" alt="Panasonic Lumix" /></a>
            <h3><a href="product.html">Panasonic Lumix</a></h3>
            <p class="s_model">Product 4</p>
            <p class="s_price">94.00<span class="s_currency s_after"> eur</span></p>
            <a class="s_button_add_to_cart" href="cart.html"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></a>
          </div>
          <div class="s_item grid_3">
          	<a class="s_thumb" href="product.html"><img src="<?php echo base_url(); ?>images/product_140x140.jpg" title="Panasonic Lumix" alt="Panasonic Lumix" /></a>
            <h3><a href="product.html">Panasonic Lumix</a></h3>
            <p class="s_model">Product 4</p>
            <p class="s_price">94.00<span class="s_currency s_after"> eur</span></p>
            <a class="s_button_add_to_cart" href="cart.html"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></a>
          </div>
          <div class="s_item grid_3">
          	<a class="s_thumb" href="product.html"><img src="<?php echo base_url(); ?>images/product_140x140.jpg" title="Panasonic Lumix" alt="Panasonic Lumix" /></a>
            <h3><a href="product.html">Panasonic Lumix</a></h3>
            <p class="s_model">Product 4</p>
            <p class="s_price">94.00<span class="s_currency s_after"> eur</span></p>
            <a class="s_button_add_to_cart" href="cart.html"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></a>
          </div>
          <div class="clear"></div>
        </div>
      </div>
      
      <div id="related_products_2" class="grid_12 alpha omega">
        <h2 class="s_title_1"><span class="s_main_color">Related</span> Products (smaller)</h2>
        <div class="clear"></div>
        <div class="s_grid_view s_listing clearfix">
          <div class="s_item grid_2">
          	<a class="s_thumb" href="product.html"><img src="<?php echo base_url(); ?>images/product_180x180.jpg" title="Panasonic Lumix" alt="Panasonic Lumix" /></a>
            <h3><a href="product.html">Panasonic Lumix</a></h3>
            <p class="s_model">Product 4</p>
            <p class="s_price">94.00<span class="s_currency s_after"> eur</span></p>
            <a class="s_button_add_to_cart" href="cart.html"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></a>
          </div>
          <div class="s_item grid_2">
          	<a class="s_thumb" href="product.html"><img src="<?php echo base_url(); ?>images/product_140x140.jpg" title="Panasonic Lumix" alt="Panasonic Lumix" /></a>
            <h3><a href="product.html">Panasonic Lumix</a></h3>
            <p class="s_model">Product 4</p>
            <p class="s_price">94.00<span class="s_currency s_after"> eur</span></p>
            <a class="s_button_add_to_cart" href="cart.html"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></a>
          </div>
          <div class="s_item grid_2">
          	<a class="s_thumb" href="product.html"><img src="<?php echo base_url(); ?>images/product_180x180.jpg" title="Panasonic Lumix" alt="Panasonic Lumix" /></a>
            <h3><a href="product.html">Panasonic Lumix</a></h3>
            <p class="s_model">Product 4</p>
            <p class="s_price">94.00<span class="s_currency s_after"> eur</span></p>
            <a class="s_button_add_to_cart" href="cart.html"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></a>
          </div>
          <div class="s_item grid_2">
          	<a class="s_thumb" href="product.html"><img src="<?php echo base_url(); ?>images/product_180x180.jpg" title="Panasonic Lumix" alt="Panasonic Lumix" /></a>
            <h3><a href="product.html">Panasonic Lumix</a></h3>
            <p class="s_model">Product 4</p>
            <p class="s_price">94.00<span class="s_currency s_after"> eur</span></p>
            <a class="s_button_add_to_cart" href="cart.html"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></a>
          </div>
          <div class="s_item grid_2">
          	<a class="s_thumb" href="product.html"><img src="<?php echo base_url(); ?>images/product_180x180.jpg" title="Panasonic Lumix" alt="Panasonic Lumix" /></a>
            <h3><a href="product.html">Panasonic Lumix</a></h3>
            <p class="s_model">Product 4</p>
            <p class="s_price">94.00<span class="s_currency s_after"> eur</span></p>
            <a class="s_button_add_to_cart" href="cart.html"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></a>
          </div>
          <div class="s_item grid_2">
          	<a class="s_thumb" href="product.html"><img src="<?php echo base_url(); ?>images/product_180x180.jpg" title="Panasonic Lumix" alt="Panasonic Lumix" /></a>
            <h3><a href="product.html">Panasonic Lumix</a></h3>
            <p class="s_model">Product 4</p>
            <p class="s_price">94.00<span class="s_currency s_after"> eur</span></p>
            <a class="s_button_add_to_cart" href="cart.html"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></a>
          </div>
          <div class="clear"></div>
        </div>
      </div>
      
      <div id="product_tags" class="grid_12 alpha omega">
        <h2 class="s_title_1"><span class="s_main_color">Product</span> Tags</h2>
        <div class="clear"></div>
        <ul class="clearfix">
          <li><a href="#">Centrino</a></li>
          <li><a href="#">Intel</a></li>
          <li><a href="#">VAIO</a></li>
          <li><a href="#">laptop</a></li>
          <li><a href="#">notebook</a></li>
        </ul>
      </div>
      
    </div>

  </div>
  <!-- end of content -->
  
  <!-- ********************** --> 
  <!--   S H O P   I N F O    --> 
  <!-- ********************** --> 
  <div id="shop_info">
    <div id="shop_info_wrap">
      <div class="container_12">
        <div id="shop_description" class="grid_3">
          <h2>Shoppica Theme</h2>
          <p>Pellentesque a arcu ut nisi semper cursus. Nullam vehicula dapibus ultrices. Integer nunc risus, fringilla ut hendrerit a, dapibus vestibulum ante. In ullamcorper erat et orci mattis rutrum et a enim. Curabitur semper, erat sit amet condimentum volutpat, enim nisi auctor augue, id fringilla est dui non lectus. Cras in urna ante, sit amet dignissim orci. Proin nibh urna, consectetur vitae placerat luctus.</p>
        </div>
        <div id="shop_contacts" class="grid_3">
          <h2>Contact Us</h2>
          <table width="100%" cellpadding="0" cellspacing="0" border="0">
            <tr>
              <td valign="middle"><span class="s_icon_32"><span class="s_icon s_phone_32"></span>5234452 <br /></span></td>
            </tr>
            <tr>
              <td valign="middle"><span class="s_icon_32"><span class="s_icon s_fax_32"></span>5234452 <br /></span></td>
            </tr>
            <tr>
              <td valign="middle"><span class="s_icon_32"><span class="s_icon s_mail_32"></span>pinko@example.com <br /> pinko@example.com</span></td>
            </tr>
            <tr>
              <td valign="middle"><span class="s_icon_32"><span class="s_icon s_skype_32"></span>my_skype <br /> </span></td>
            </tr>
          </table>
        </div>
        <div id="twitter" class="grid_3">
          <h2>Twitter</h2>
          <ul id="twitter_update_list"><li></li></ul>
          <script type="text/javascript" src="<?php echo base_url(); ?>http://twitter.com/javascripts/blogger.js"></script> 
          <script type="text/javascript" src="<?php echo base_url(); ?>http://twitter.com/statuses/user_timeline/themeburn.json?callback=twitterCallback2&amp;count=2"></script> 
        </div>
        <div id="facebook" class="grid_3">
          <h2>Facebook</h2>
          <div class="s_widget_holder">
          <script type="text/javascript">
						//<![CDATA[
            document.write('<fb:fan profileid="111188056908" stream="0" connections="6" logobar="0" width="220" css="http://svest.no-ip.org/test/opencart/catalog/view/theme/shoppica/stylesheet/facebook.css.php?300"></fb:fan>');
						//]]>
					</script>
          </div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </div>
  <!-- end of shop info --> 
  
  
  
  <!-- ********************** --> 
  <!--      F O O T E R       --> 
  <!-- ********************** --> 
  <div id="footer" class="container_12">
    <div id="footer_categories" class="clearfix">
      <div class="grid_2">
        <h2>Electronics</h2>
        <ul class="s_list_1">
          <li><a href="">Digital Cameras</a></li>
          <li><a href="">Home Audio</a></li>
          <li><a href="">Home Cinema</a></li>
          <li><a href="">Cell Phones</a></li>
          <li><a href="">MP3 Players</a></li>
          <li><a href="">Car-Audio</a></li>
        </ul>
      </div>
      <div class="grid_2">
        <h2>Computers</h2>
        <ul class="s_list_1">
          <li><a href="">Desktops</a></li>
          <li><a href="">Laptops</a></li>
          <li><a href="">Monitors</a></li>
          <li><a href="">Components</a></li>
          <li><a href="">Software</a></li>
        </ul>
      </div>
      <div class="grid_2">
        <h2>Clothing</h2>
        <ul class="s_list_1">
          <li><a href="">Women's Clothing</a></li>
          <li><a href="">Men's Clothing</a></li>
          <li><a href="">Boys</a></li>
          <li><a href="">Girls</a></li>
          <li><a href="">Infants and toddlers</a></li>
        </ul>
      </div>
      <div class="grid_2">
        <h2>Shoes</h2>
        <ul class="s_list_1">
          <li><a href="">Women's Shoes</a></li>
          <li><a href="">Men's Shoes</a></li>
          <li><a href="">Kids' Shoes</a></li>
          <li><a href="">Sportswear</a></li>
        </ul>
      </div>
      <div class="grid_2">
        <h2>Gifts</h2>
        <ul class="s_list_1">
          <li><a href="">Perfumes</a></li>
          <li><a href="">Spirits and Beers</a></li>
          <li><a href="">Wines</a></li>
          <li><a href="">Flowers</a></li>
          <li><a href="">Chocolates and sweets</a></li>
          <li><a href="">Toys and Games</a></li>
        </ul>
      </div>
      <div class="grid_2">
        <h2>At home</h2>
        <ul class="s_list_1">
          <li><a href="">Furniture</a></li>
          <li><a href="">Garden</a></li>
          <li><a href="">Appliances</a></li>
          <li><a href="">Pet Supplies</a></li>
          <li><a href="">Tools and Accessories</a></li>
          <li><a href="">Lighting</a></li>
        </ul>
      </div>
      <div class="clear"></div>
      <div class="grid_12 border_eee"></div>
    </div>
    <div id="payments" class="right clearfix">
      <img src="<?php echo base_url(); ?>images/payments/discover_straight_32px.png" alt="" />
      <img src="<?php echo base_url(); ?>images/payments/american_express_straight_32px.png" alt="" />
      <img src="<?php echo base_url(); ?>images/payments/moneybookers_straight_32px.png" alt="" />
      <img src="<?php echo base_url(); ?>images/payments/paypal_straight_32px.png" alt="" />
      <img src="<?php echo base_url(); ?>images/payments/visa_straight_32px.png" alt="" />
      <img src="<?php echo base_url(); ?>images/payments/american_express_straight_32px.png" alt="" />
    </div>
    <p id="copy">&copy; Copyright 2011. Powered by <a class="blue" href="">Open Cart</a>.<br /> <a class="s_main_color" href="http://www.shoppica.net">Shoppica theme</a> made by <a href="http://www.themeburn.com">ThemeBurn.com</a></p>
  </div>
  <!-- end of FOOTER --> 
  
</div>

<div id="fb-root"></div>
<script type="text/javascript">
  window.fbAsyncInit = function() {
    FB.init({appId: '0c18007de6f00f7ecda8c040fb76cd90', status: true, cookie: true,
     xfbml: true});
  };
  (function() {
    var e = document.createElement('script'); e.async = true;
    e.src = document.location.protocol +
    '//connect.facebook.net/en_US/all.js';
    document.getElementById('fb-root').appendChild(e);
  }());
</script>

</body>
</html>
