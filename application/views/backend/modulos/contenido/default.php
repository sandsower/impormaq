
<!-- 75% Box Grid Container: Start -->
<div class="grid_24">
<script type="text/javascript" src="<?php echo base_url(); ?>js/Contenido/dropdown.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/Contenido/script.js"></script>

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon pages">Contenido</h2>
		
	</div>
	<!-- Box Header: End -->
	
	<div class="box_content">
		<!-- Simple Sorting Table: Start -->
		<div class="accordion">
		

			<h5><a href="#">Información</a></h5>
			
			<form method="post" action="contenido/modify" class="formItem">
				<div>
					<input class="tipo" type="radio" name="tipo" value="Editar" checked> Editar<br>
					<input class="tipo" type="radio" name="tipo" value="Crear"> Crear<br>
					<input class="tipo" type="radio" name="tipo" value="Borrar"> Borrar

					<table>
						<tr>
							<? if(isset($areas)):?>
							<label id="textoArea">Seleccione el area que desea modificar:</label><br/>
							<select name="area" id="area">
								<option value="0">--Seleccione Area--</option>
								<? foreach($areas as $area): ?>
									<option value=<? echo $area->Area; ?>><? echo $area->Area; ?></option>
								<? endforeach;?>
							</select>
							<? endif;?>
						</tr>
						<tr>
							<div id="SeleccionarContenido">
								<label id="textoContenido">Seleccione el contenido a mostrar:</label><br/>
								<select id="Contenido"  name="Contenido"></select>
							</div>
						</tr>
						<tr>
							<div id="ModTitulo">
								<label id="textoTitulo" >Titulo:</label><br/>
								<input type="text" id="titulo" />
							</div>
						</tr>
						<tr>
							<div id="ModTexto">
								<label id="textoTexto">Texto:</label><br/>
								<textarea id="texto" ></textarea>
							</div>
						</tr>
						<tr>
							<td><label class="left">Bienvenido:</label></td>
							<td><textarea name="bienvenido" rows="5" cols="100"><? if(isset($bienvenido)) :
									echo $bienvenido;?>
								<? endif; ?></textarea></td>
						</tr>
						<tr>
						   <td><label class="left">Campos:</label</td>
						   <td><?php if(isset($campos)): ?>
            				 <?php echo form_dropdown('campos', $campos); ?>
             				 <?php endif; ?><br/>
             				 <textarea name="txtContenido" rows="5" cols="100"><? if(isset($contenido)) :
									echo $contenido;?><? endif; ?></textarea>
						   </td>
						</tr>
					</table>
					
		            <button>Modificar</button>
		         </form>	
				</div>
				
				<h5><a href="#">Imagenes</a></h5>l
			
				<div>
				   <table>
				      <tr>
				      <td><label class="left">Imagen:</label></td>
				      <td>
				      <div id="upload" class="box_content padding">
            			<?php if(isset($error)) : echo $error; endif;?>
         	   		<?php echo form_open_multipart('backend/contenido/do_upload');?>
                     <input type="radio" name="type" value="1" /> Logo<br />
                     <input type="radio" name="type" value="2" /> Imagen Izquierda<br />
                     <input type="radio" name="type" value="3" /> Imagen Derecha<br />
                     <input type="radio" name="type" value="4" /> Imagen Central<br />
            			<input type="file" name="userfile" size="20" />
            			<br /><br />
            			<input type="submit" value="upload" />
      			      </form>
		            </div>
		            </td>
				      <tr>
				   </table>
				</div>
		</div>
		<!-- Simple Sorting Table: End -->
		</form>
		<button id="save">Guardar cambios</button>
	</div>
	
</div>
<!-- 75% Box Grid Container: End -->
