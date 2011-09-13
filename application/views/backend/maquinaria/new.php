
<!-- 100% Box Grid Container: Start -->
<div class="grid_24">

	<!-- Box Header: Start -->
	
		<form method="post" action="newMachine" class="formItem">
		<!-- Simple Sorting Table: Start -->
		
		<div class="box_top">
		
		<h2 class="icon frames">Crear Maquinaria</h2>
		
		</div>
		<!-- Box Header: End -->
	
		<!-- Box Content: Start -->
			<div class="box_content padding">
				<div>
					<table>
						<tr>
							<td><label class="left">Maquina:</label></td>
							<td><input type="text" name="maquina" class="validate"/></td>
						</tr>
						<tr>	
							<td><label class="left">Marca:</label></td>
							<td>
								<select name="marca">
									<option value='0'>Seleccione Marca</option>
									<?php if(isset($marcas)) : foreach($marcas as $row) : ?>
									<option value='<?php echo $row->IdMarca; ?>'><?php echo $row->Marca; ?></option>
									<?php endforeach; ?>
									<?php endif; ?>
								</select>
							</td>
						</tr>
						<tr>
							<td><label class="left">Tipo:</label></td>
							<td>
								<select name="tipo">
									<option value='0'>Seleccione Tipo</option>
									<?php if(isset($tipos)) : foreach($tipos as $row) : ?>
									<option value='<?php echo $row->idTipos; ?>'><?php echo $row->Tipo; ?></option>
									<?php endforeach; ?>
									<?php endif; ?>
								</select>
							</td>
						</tr>						
						<tr>
							<td><label class="left">Modelo:</label></td>
							<td><input type="text" name="modelo" class="validate"/></td>
						</tr>
						
						<tr>
							<td><label class="left">Precio:</label></td>
							<td><input type="text" name="precio" class="validate"/></td>
						</tr>
						<tr>
							<td><label class="left">Especificaciones:</label></td>
							<td><textarea class="wysiwyg" name="especificaciones"></textarea></td>
						</tr>
						<tr>
							<td><label class="left" name="urlVideo">Direccion Video:</label></td>
							<td><textarea ></textarea></td>
						</tr>
					</table>
				</div>	
				<button>Crear</button>
			</div>		
		
		</form>	

		<div class="box_top">
			<h2 class="icon frames">Subir Imagenes</h2>
		</div>
		<div id="upload" class="box_content padding">
		<?php echo form_open_multipart('upload/do_upload');?>
		<input type="file" name="userfile" size="20" />
		<br /><br />
		<input type="submit" value="upload" />

		</form>
		</div>
		
	
	<!-- Box Content: End -->
</div>
	