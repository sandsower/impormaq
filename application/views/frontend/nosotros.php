  <!-- ********************** --> 
  <!--   S H O P   I N F O    --> 
  <!-- ********************** --> 
  <div id="content" class="container_12">

    <div class="grid_12">
    <? if(isset($nosotros)) :?>
      <h2>Nosotros</h2>
	   <img class="wrap_center" width="400" src="<?php echo base_url(); ?>img/frontend/nosotros.jpg" alt="" />
	  <p>
    <? echo $nosotros;?>
	  </p>
    <? endif; ?>

    <? if(isset($objetivo)) :?>
	  <h3>Objetivo</h3>
	  <p>
    <? echo $objetivo; ?>
	  </p>
    <? endif; ?>

    <? if(isset($mision)) :?>
      <h3 style = "padding-top:30px;">Mision</h3>
	  <img class="wrap_right" width="200" src="<?php echo base_url(); ?>img/frontend/Mision.jpg" alt="" />
    <p>
    <? echo $mision; ?>
	  </p>
    <? endif; ?>

    <? if(isset($vision)) :?>
      <h3 style = "padding-top:30px;" >Vision</h3>
      <img class="wrap_left"   width="200" src="<?php echo base_url(); ?>img/frontend/Vision.jpeg" alt="" />
      <p>
      <? echo $vision; ?>
      </p>
    <? endif; ?>

    <? if(isset($politicas)) :?>
      <h3 style = "padding-top:30px;" >Politicas</h3>
      <p>
      <? echo $politicas; ?>
      </p>
    <? endif; ?>
	  </div>
  </div>  
  <div id="shop_info">
    <div id="shop_info_wrap">
      <div class="container_12">
        <div id="shop_description" class="grid_3">
          <h2>GetIt Theme</h2>
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
          <script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script> 
          <script type="text/javascript" src="http://twitter.com/statuses/user_timeline/themeburn.json?callback=twitterCallback2&amp;count=2"></script> 
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
  