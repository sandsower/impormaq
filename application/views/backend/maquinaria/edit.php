<?php if(isset($maquina)) : foreach($maquina->result() as $row2) : ?>

<!-- 100% Box Grid Container: Start -->
<div class="grid_24">

	<!-- Box Header: Start -->
	
		<form method="post" action="../update" class="formItem">
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
							<td><input type="hidden" name="id" value="<?php echo $row2->IdMaquina; ?>" />
							<input type="text" name="maquina" class="validate" value="<?php echo $row2->Maquina;?>"/></td>
						</tr>
						<tr>	
							<td><label class="left">Marca:</label></td>
							<td>
								<select name="marca">
									<option value='<?php echo $row2->IdMarca ?>'><?php echo $row2->Marca; ?></option>
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
									<option value='<?php echo $row2->IdTipos ?>'><?php echo $row2->Tipo; ?></option>
									<?php if(isset($tipos)) : foreach($tipos as $row) : ?>
									<option value='<?php echo $row->idTipos; ?>'><?php echo $row->Tipo; ?></option>
									<?php endforeach; ?>
									<?php endif; ?>
								</select>
							</td>
						</tr>						
						<tr>
							<td><label class="left">Modelo:</label></td>
							<td><input type="text" name="modelo" class="validate" value="<?php echo $row2->Modelo;?>"/></td>
						</tr>
						
						<tr>
							<td><label class="left">Precio:</label></td>
							<td><input type="text" name="precio" class="validate" value="<?php echo $row2->Precio;?>"/></td>
						</tr>
						<tr>
							<td><label class="left">Especificaciones:</label></td>
							<td><textarea class="wysiwyg" name="especificaciones"><?php echo $row2->Especificaciones; ?></textarea></td>
						</tr>
						<tr>
							<td><label class="left" >Direccion Video:</label></td>
							<td><textarea name="urlVideo"><?php echo $row2->VideoUrl; ?></textarea></td>
						</tr>
					</table>
				</div>	
				<button>Actualizar</button>
			</div>		
		
		</form>	

	<!-- Box Content: End -->
</div>
					
<?php endforeach; ?>
<?php endif; ?>