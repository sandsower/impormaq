
<!-- 75% Box Grid Container: Start -->
<div class="grid_24">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon pages">Modificar Contenido</h2>
		
	</div>
	<!-- Box Header: End -->
	
	<div class="box_content">
		<!-- Simple Sorting Table: Start -->
		<div class="accordion">
		

			<h5><a href="#">Información</a></h5>
			
				<div>
		         <form method="post" action="contenido/modify" class="formItem">
					<table>
						<tr>
							<td><label class="left">Mision:</label></td>
							<td><textarea name="mision" rows="5" cols="100"><? if(isset($mision)) :
									echo $mision;?>
								<? endif; ?></textarea>
								
							</td>
						</tr>
						<tr>	
							<td><label class="left">Vision:</label></td>
							<td><textarea name="vision" rows="5" cols="100"><? if(isset($vision)) :
									echo $vision;?>
								<? endif; ?></textarea></td>
						</tr>
						<tr>
							<td><label class="left">Objetivo:</label></td>
							<td><textarea name="objetivo" rows="5" cols="100"><? if(isset($objetivo)) :
									echo $objetivo;?>
								<? endif; ?></textarea></td>
						</tr>						
						<tr>
							<td><label class="left">Politicas:</label></td>
							<td><textarea name="politicas" rows="5" cols="100"><? if(isset($politicas)) :
									echo $politicas;?>
								<? endif; ?></textarea></td>
						</tr>	
						<tr>
							<td><label class="left">Nosotros:</label></td>
							<td><textarea name="nosotros" rows="5" cols="100"><? if(isset($nosotros)) :
									echo $nosotros;?>
								<? endif; ?></textarea></td>
						</tr>
						<tr>
							<td><label class="left">Bienvenido:</label></td>
							<td><textarea name="bienvenido" rows="5" cols="100"><? if(isset($bienvenido)) :
									echo $bienvenido;?>
								<? endif; ?></textarea></td>
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
	</div>
	
</div>
<!-- 75% Box Grid Container: End -->
