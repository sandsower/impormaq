<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/shoppica.js"></script>

<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.8/jquery.validate.min.js"></script>
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
	$("#login").validate();

});
</script>
<!-- ********************** --> 
  <!--      C O N T E N T     --> 
  <!-- ********************** --> 
  <div id="content" class="container_16">
  

    <div id="login_page" class="grid_16">
      <div class="grid_8 omega">
        <h2 class="s_title_1"><span class="s_secondary_color">Administrador</span></h2>

        <div class="clear"></div>
        <form id="login" action="login/validateAdmin" method="post">
          <div class="s_row_3 clearfix">
            Introduzca las credenciales.<br />
            <br />
            <label><strong>Nombre de usuario:</strong></label>
            <input type="text" size="35" name="username" class="required" />
            <br />
            <br />
            <label><strong>Password:</strong></label>
            <input type="password" size="35" name="password"class="required" />
            <br />
          </div>
          <span class="clear border_ddd"></span>
          <br />
          <div class="s_nav s_size_2 left">
            
          <button class="s_button_1 s_main_color_bgr" type="submit"><span class="s_text">Entrar</span></button>
        </form>
      </div>
      <div class="clear"></div>

    </div>
    
  </div>
  <!-- end of content --> 
  