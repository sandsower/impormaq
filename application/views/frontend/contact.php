
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.8/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/shoppica.js"></script>
<script type="text/javascript">
$(document).ready(function () {
														
	jQuery.validator.setDefaults({
			errorElement: "p",
			errorClass: "s_error_msg",
			errorPlacement: function(error, element) {
					error.insertAfter(element);
			},
			highlight: function(element, errorClass, validClass) {
					$(element).addClass("error_element").removeClass(validClass);
					$(element).parent("div").addClass("s_error_row");
			},
			unhighlight: function(element, errorClass, validClass) {
					$(element).removeClass("error_element").addClass(validClass);
					$(element).parent("div").removeClass("s_error_row");
			}
	});
	$("#contact_form").validate({
		rules: {
			enquiry: {
					required: true,
					minlength: 10
			}
		}
	});
	
});
</script>

  <!-- ********************** --> 
  <!--     I N T R O          -->
  <!-- ********************** --> 

  <div id="intro">
    <div id="intro_wrap">
      <div class="container_12">
        <div id="breadcrumbs" class="grid_12">
          <a href="">Home</a>
          &gt;
          <a href="">Contacto</a>
        </div>
        <h1>Contactanos</h1>
      </div>
    </div>
  </div>
  <!-- end of intro -->

  
  <!-- ********************** --> 
  <!--      C O N T E N T     -->
  <!-- ********************** --> 
  <div id="content" class="container_16">


    
    <div id="contacts" class="s_info_page grid_12">
     	
      <h2><span class="s_secondary_color">Ubicacion</span> </h2>
      
      <p class="alpha grid_4"><strong>Direccion</strong><br /> Calle y numero<br /> Ciudad<br /> Codigo postal</p>
      <p class="grid_4"><strong>Telephone:</strong><br /> +1 (0) 7007001</p>
      <p class="omega grid_4"><strong>Fax:</strong><br /> +1 (0) 7007002</p>

      <br />
      <span class="clear border_ddd"></span>
      <br />
      
      
      <h2><span class="s_secondary_color">Enviar</span> un mensaje</h2>

      <form id="contact_form" action="#" method="post" enctype="multipart/form-data">
      	<div id="contact_form_icon"></div>
        
        <div class="s_row_3 clearfix">
          <label><strong>Nombre:</strong> *</label>
          <input type="text" size="40" class="required" title="Name must be between 3 and 32 characters!" />
        </div>
        <div class="s_row_3 clearfix">
          <label><strong>Correo electronico:</strong> *</label>
          <input type="text" size="40" class="required email" title="E-Mail Address does not appear to be valid!" />
        </div>
        <div class="s_row_3 clearfix">
          <label><strong>Mensaje:</strong> *</label>
          <div class="s_full">
            <textarea id="enquiry" style="width: 98%;" rows="10" class="required" title="Enquiry must be between 10 and 3000 characters!" cols="50"></textarea>
          </div>
        </div>
        <a class="s_button_1 s_main_color_bgr" onclick="$('#contact_form').submit();"><span class="s_text">Enviar</span></a>
      </form>

    </div>
    
    <div id="right_col" class="grid_3">

      <div id="information_module" class="s_box">
        <h2>Information</h2>
        <ul class="s_list_1">
          <li><a href="#">Acerca de GetIt</a></li>
          <li><a href="#">Politicas de privacidad</a></li>
          <li><a href="#">Terminos y condiciones</a></li>
          <li><a href="#">Contacto</a></li>
          <li><a href="#">Mapa de sitio</a></li>
        </ul>
      </div>
  
      
    </div>
    
    <div class="clear"></div>
   
  </div>
  <!-- end of content -->