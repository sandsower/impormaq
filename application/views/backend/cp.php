<div id="shoppica_cp_open">
  <a href="javascript:;"></a>
</div>
<div id="shoppica_cp">
  <a id="shoppica_cp_close" href="javascript:;"></a>
  <span id="shoppica_cp_title">Panel de control</span>
  <div id="shoppica_cp_wrapper">
    <form class="clearfix" action="">
      <h3>Opciones de tema</h3>
      <div class="s_panel_section">
        <div class="s_cp_row clearfix">

          <label><strong>Tama&ntilde;o</strong></label>
          <span class="clear"></span>
          <select id="layout_change">
            <option value="1">Fixed width</option>
            <option value="2">Full width</option>
          </select>
        </div>

        <div class="s_cp_row clearfix">
          <label><strong>Color:</strong></label>
          <span class="clear"></span>
          <div id="prefedined_themes">
            <select id="modify_theme_predefined" name="shoppica[predefined_theme]">
              <option value="custom">custom</option>
              <option value="theme2">Green</option>

              <option value="theme1">Blue</option>
              <option value="theme3">Orange</option>
              <option value="theme4">Tan</option>
            </select>
          </div>
        </div>
        <div class="s_cp_row clearfix">

          <label>Color primario:</label>
          <div id="mainColorSelector" class="colorSelector">
            <div style="background-color: #4cb1ca"></div>
          </div>
          <input class="s_color" type="hidden" name="shoppica[theme_colors][main_color]" value="4cb1ca" size="6" maxlength="6" />
        </div>
        <div class="s_cp_row clearfix">
          <label>Color secundario:</label>

          <div id="secondaryColorSelector" class="colorSelector">

            <div style="background-color: #f12b63"></div>
          </div>
          <input class="s_color" type="hidden" name="shoppica[theme_colors][secondary_color]" value="f12b63" size="6" maxlength="6" />
        </div>
        <div class="s_cp_row clearfix">
          <label>Intro:</label>
          <div id="introColorSelector" class="colorSelector">

            <div style="background-color: #e6f6fa"></div>

          </div>
          <input class="s_color" type="hidden" name="shoppica[theme_colors][intro_color]" value="e6f6fa" size="6" maxlength="6" />
        </div>
        <div class="s_cp_row clearfix">
          <label>Intro texto:</label>
          <div id="introTextColorSelector" class="colorSelector">
            <div style="background-color: #103e47"></div>

          </div>

          <input class="s_color" type="hidden" name="shoppica[theme_colors][intro_text_color]" value="103e47" size="6" maxlength="6" />
        </div>
        <div class="s_cp_row clearfix">
          <label>Intro titulo:</label>
          <div id="introTitleColorSelector" class="colorSelector">
            <div style="background-color: #4cb1ca"></div>
          </div>

          <input class="s_color" type="hidden" name="shoppica[theme_colors][intro_title_color]" value="4cb1ca" size="6" maxlength="6" />

        </div>
        <div class="s_cp_row clearfix">
          <label>Precio:</label>
          <div id="priceColorSelector" class="colorSelector">
            <div style="background-color: #4cb1ca"></div>
          </div>
          <input class="s_color" type="hidden" name="shoppica[theme_colors][price_color]" value="4cb1ca" size="6" maxlength="6" />

        </div>

        <div class="s_cp_row clearfix">
          <label>Precio texto:</label>
          <div id="priceTextColorSelector" class="colorSelector">
            <div style="background-color: #ffffff"></div>
          </div>
          <input class="s_color" type="hidden" name="shoppica[theme_colors][price_text_color]" value="ffffff" size="6" maxlength="6" />
        </div>

        <div class="s_cp_row clearfix">

          <label>Precio Promocional:</label>
          <div id="promoPriceColorSelector" class="colorSelector">
            <div style="background-color: #f12b63"></div>
          </div>
          <input class="s_color" type="hidden" name="shoppica[theme_colors][promo_price_color]" value="f12b63" size="6" maxlength="6" />
        </div>
        <div class="s_cp_row clearfix">

          <label>Precio Prom Texto:</label>

          <div id="promoPriceTextColorSelector" class="colorSelector">
            <div style="background-color: #ffffff"></div>
          </div>
          <input class="s_color" type="hidden" name="shoppica[theme_colors][promo_price_text_color]" value="ffffff" size="6" maxlength="6" />
        </div>
        <div class="s_cp_row clearfix">
          <label>Fondo de pagina:</label>

          <div id="backgroundColorSelector" class="colorSelector">

            <div style="background-color: #edf3f5"></div>
          </div>
          <input class="s_color" type="hidden" name="shoppica[theme_colors][background_color]" value="edf3f5" size="6" maxlength="6" />
        </div>

        <div class="s_cp_row clearfix">
          <label>Textura:</label>

          <select id="textureSelector" class="right" style="width: 90px; margin-right: 0;" name="shoppica[theme_colors][texture]">
            <option value="texture_1">Squares</option>
            <option value="texture_2">Noise</option>
            <option value="texture_3" selected="selected">Rough</option>
            <option value="no_texture">No texture</option>
          </select>
        </div>

        <input type="hidden" id="colors_data" name="colors_data" value='{"theme1":{"main_color":"4cb1ca","secondary_color":"f12b63","intro_color":"e6f6fa","intro_text_color":"103e47","intro_title_color":"4cb1ca","price_color":"4cb1ca","price_text_color":"ffffff","promo_price_color":"f12b63","promo_price_text_color":"ffffff","background_color":"edf3f5","texture":"texture_3"},"theme2":{"main_color":"71b013","secondary_color":"ff9900","intro_color":"dcf5ce","intro_text_color":"385217","intro_title_color":"65a819","price_color":"bfe388","price_text_color":"395215","promo_price_color":"ff9900","promo_price_text_color":"ffffff","background_color":"f9fff2","texture":"texture_2"},"theme3":{"main_color":"ff8c00","secondary_color":"40aebd","intro_color":"ffecc7","intro_text_color":"574324","intro_title_color":"f27100","price_color":"f5c275","price_text_color":"4d3b17","promo_price_color":"40aebd","promo_price_text_color":"ffffff","background_color":"fffceb","texture":"texture_1"},"theme4":{"main_color":"b3a97d","secondary_color":"4cb1ca","intro_color":"f0eddf","intro_text_color":"8a8577","intro_title_color":"7a7153","price_color":"e3dcbf","price_text_color":"4d4938","promo_price_color":"4cb1ca","promo_price_text_color":"ffffff","background_color":"f7f5ef","texture":"texture_1"},"parent":{"main_color":"4cb1ca","secondary_color":"f12b63","intro_color":"e6f6fa","intro_text_color":"103e47","intro_title_color":"4cb1ca","price_color":"4cb1ca","price_text_color":"ffffff","promo_price_color":"f12b63","promo_price_text_color":"ffffff","background_color":"edf3f5","texture":"texture_3"},"custom":{"main_color":"4cb1ca","secondary_color":"f12b63","intro_color":"e6f6fa","intro_text_color":"103e47","intro_title_color":"4cb1ca","price_color":"4cb1ca","price_text_color":"ffffff","promo_price_color":"f12b63","promo_price_text_color":"ffffff","background_color":"edf3f5","texture":"texture_3"}}' />
      </div>
    </form>
  </div>
</div>

<script type="text/javascript">
//<![CDATA[

  if($.cookie('shoppica_cp_closed') == 1) {
    $("#shoppica_cp").hide();
    $("#shoppica_cp_open").show();
  } else {
    $("#shoppica_cp").show();
  }
  
  if($.cookie('layout_fixed') == 1) {
    $("body").addClass("s_layout_fixed");
    $("#layout_change").attr('selectedIndex', 0)
  } else {
    $("body").removeClass("s_layout_fixed");
    $("#layout_change").attr('selectedIndex', 1)
  }
  
  $("#layout_change").bind("change", function() {
    var layout_mode = $("#layout_change").val();
    if (layout_mode == 1) {
      $("body").addClass("s_layout_fixed");
      $.cookie('layout_fixed', 1);
    } else {
      $("body").removeClass("s_layout_fixed");

      $.cookie('layout_fixed', null);
    }
  });

  $("#shoppica_cp_close").bind("click", function() {
    $("#shoppica_cp").hide("slide", { direction: "left" }, 1000, function() {
      $("#shoppica_cp_open").show("slide", { direction: "left" }, 500);
      $.cookie('shoppica_cp_closed', 1);
    });
  });

  $("#shoppica_cp_open a").bind("click", function() {
    $("#shoppica_cp_open").hide("slide", { direction: "left" }, 500, function() {
      $("#shoppica_cp").show("slide", { direction: "left" }, 1000);
      $.cookie('shoppica_cp_closed', null);
    });
  });

  $("#modify_theme_categories").bind("change", function() {
    window.location = $(this).val();
  });

  $("#textureSelector").bind("change", function(event, type) {
      if ($("#modify_theme_predefined").val() != "custom" && type != 'apply-only') {
        $("#modify_theme_predefined").val("custom");
      }

      if ($(this).val() != 'no_texture') {
        $("body.s_layout_fixed").css('background-image', "url(<?php echo base_url(); ?>img/frontend/" + $(this).val() + ".png)");
      } else {
        $("body.s_layout_fixed").css('background-image', 'none');
      }
  });

  $('#mainColorSelector, #secondaryColorSelector, #introColorSelector, #introTextColorSelector, #introTitleColorSelector, #priceColorSelector, #priceTextColorSelector, #promoPriceColorSelector, #promoPriceTextColorSelector, #backgroundColorSelector').each(function() {
    var $el = $(this);

    $el.ColorPicker({
      color: '#0000ff',
      onShow: function (colpkr) {

        if ($("#modify_theme_predefined").val() != "custom") {
          $("#modify_theme_predefined").val("custom");
        }

        $(colpkr).fadeIn(500);
        $(this).ColorPickerSetColor($el.next("input").val());

        return false;
      },
      onHide: function (colpkr) {

        if ($("#modify_theme_predefined").val() != "custom") {
          $("#modify_theme_predefined").val("custom");
        }

        $(colpkr).fadeOut(500);
        $el.next("input").val($(colpkr).data('colorpicker').fields.eq(0).val());

        return false;
      },
      onChange: function (hsb, hex, rgb) {

        $el.find('div').css('backgroundColor', '#' + hex);
        switch ($el.attr("id")) {

          case 'mainColorSelector' :
            $(".s_main_color, #twitter li span a, .s_box h2, .box .top").css('color', '#' + hex);
            $(".s_main_color_bgr, #cart .s_icon, #shop_contacts .s_icon, .s_list_1 li, .s_item .s_button_add_to_cart .s_icon, #cart_menu .s_icon, #intro .s_button_prev, #intro .s_button_next,").css('backgroundColor', '#' + hex);
            $("#main_color").val('#' + hex);
            break;

          case 'secondaryColorSelector' :
            $("#categories > ul > li > a, #footer_categories h2, .pagination a, #view_mode .s_selected a, .s_secondary_color").css('color', '#' + hex);
            $(".s_secondary_color_bgr, #show_search, #view_mode .s_selected .s_icon").css('backgroundColor', '#' + hex);
            $("#secondary_color").val('#' + hex);
            break;

          case 'introColorSelector' :
            $("#intro").css('backgroundColor', '#' + hex);
            break;

          case 'introTextColorSelector' :
            $("#intro, #breadcrumbs a").css('color', '#' + hex);
            break;

          case 'introTitleColorSelector' :
            $("#intro h1, #intro h1 *, #intro h2, #intro h2 *").css('color', '#' + hex);
            break;

          case 'priceColorSelector' :
            $(".s_price").not(".s_promo_price").css('backgroundColor', '#' + hex);
            break;

          case 'priceTextColorSelector' :
            $(".s_price, .s_price .s_currency").not(".s_promo_price, .s_old_price, .s_promo_price .s_currency").css('color', '#' + hex);
            break;

          case 'promoPriceColorSelector' :
            $(".s_promo_price").css('backgroundColor', '#' + hex);
            break;

          case 'promoPriceTextColorSelector' :
            $(".s_promo_price, .s_old_price, .s_promo_price .s_currency").css('color', '#' + hex);
            break;

          case 'backgroundColorSelector' :
            $("body.s_layout_fixed").css('backgroundColor', '#' + hex);
            break;

        }
      }
    });

  });

  var colorsData = jQuery.parseJSON($("#colors_data").val());

  $("#modify_theme_predefined").bind("change", function() {
    themeName = $(this).val();
    themeData = colorsData[themeName];

    $("#textureSelector").val(themeData.texture).trigger("change", ['apply-only']);

    $("#mainColorSelector").ColorPickerSetColor(themeData.main_color);
    $("#" + $("#mainColorSelector").data("colorpickerId")).find("input").trigger("change");
    $("#mainColorSelector").next("input").val($("#" + $("#mainColorSelector").data("colorpickerId")).find("div.colorpicker_hex input").val());

    $("#secondaryColorSelector").ColorPickerSetColor(themeData.secondary_color);
    $("#" + $("#secondaryColorSelector").data("colorpickerId")).find("input").trigger("change");
    $("#secondaryColorSelector").next("input").val($("#" + $("#secondaryColorSelector").data("colorpickerId")).find("div.colorpicker_hex input").val());

    $("#introColorSelector").ColorPickerSetColor(themeData.intro_color);
    $("#" + $("#introColorSelector").data("colorpickerId")).find("input").trigger("change");
    $("#introColorSelector").next("input").val($("#" + $("#introColorSelector").data("colorpickerId")).find("div.colorpicker_hex input").val());

    $("#introTextColorSelector").ColorPickerSetColor(themeData.intro_text_color);
    $("#" + $("#introTextColorSelector").data("colorpickerId")).find("input").trigger("change");
    $("#introTextColorSelector").next("input").val($("#" + $("#introTextColorSelector").data("colorpickerId")).find("div.colorpicker_hex input").val());

    $("#introTitleColorSelector").ColorPickerSetColor(themeData.intro_title_color);
    $("#" + $("#introTitleColorSelector").data("colorpickerId")).find("input").trigger("change");
    $("#introTitleColorSelector").next("input").val($("#" + $("#introTitleColorSelector").data("colorpickerId")).find("div.colorpicker_hex input").val());

    $("#priceColorSelector").ColorPickerSetColor(themeData.price_color);
    $("#" + $("#priceColorSelector").data("colorpickerId")).find("input").trigger("change");
    $("#priceColorSelector").next("input").val($("#" + $("#priceColorSelector").data("colorpickerId")).find("div.colorpicker_hex input").val());

    $("#priceTextColorSelector").ColorPickerSetColor(themeData.price_text_color);
    $("#" + $("#priceTextColorSelector").data("colorpickerId")).find("input").trigger("change");
    $("#priceTextColorSelector").next("input").val($("#" + $("#priceTextColorSelector").data("colorpickerId")).find("div.colorpicker_hex input").val());

    $("#promoPriceColorSelector").ColorPickerSetColor(themeData.promo_price_color);
    $("#" + $("#promoPriceColorSelector").data("colorpickerId")).find("input").trigger("change");
    $("#promoPriceColorSelector").next("input").val($("#" + $("#promoPriceColorSelector").data("colorpickerId")).find("div.colorpicker_hex input").val());

    $("#promoPriceTextColorSelector").ColorPickerSetColor(themeData.promo_price_text_color);
    $("#" + $("#promoPriceTextColorSelector").data("colorpickerId")).find("input").trigger("change");
    $("#promoPriceTextColorSelector").next("input").val($("#" + $("#promoPriceTextColorSelector").data("colorpickerId")).find("div.colorpicker_hex input").val());

    $("#backgroundColorSelector").ColorPickerSetColor(themeData.background_color);
    $("#" + $("#backgroundColorSelector").data("colorpickerId")).find("input").trigger("change");
    $("#backgroundColorSelector").next("input").val($("#" + $("#backgroundColorSelector").data("colorpickerId")).find("div.colorpicker_hex input").val());
  });
	
//]]>
</script>

