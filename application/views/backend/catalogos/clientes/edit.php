
<!-- 100% Box Grid Container: Start -->
<div class="grid_24">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon pages">Crear Cliente</h2>
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content">
		<form method="post" action="../update" class="formItem">
		<!-- Simple Sorting Table: Start -->
		<div class="accordion">
		
		<?php foreach($result->result() as $row) : ?>
			<h5><a href="#">Datos Personales</a></h5>
			
				<div>
					<table>
						<tr>

							<td><label class="left">Nombre(s):</label></td>
							<td>
								<input type="hidden" name="id" value="<?php echo $row->IdClientes; ?>"/>
								<input type="text" name="nombre" class="validate" value="<?php echo $row->Nombres; ?>"/>
							</td>
						</tr>
						<tr>	
							<td><label class="left">Apellido Paterno:</label></td>
							<td><input type="text" name="apellidoPat" class="validate" value="<?php echo $row->APaterno; ?>" /></td>
						</tr>
						<tr>
							<td><label class="left">Apellido Materno:</label></td>
							<td><input type="text" name="apellidoMat" value="<?php echo $row->AMaterno; ?>" /></td>
						</tr>						
						<tr>
							<td><label class="left">Empresa:</label></td>
							<td><input type="text" name="empresa" value="<?php echo $row->Empresa; ?>"/></td>
						</tr>	
					</table>
				</div>	
					
					
			
			
			<h5><a href="#">Contacto</a></h5>
			<div>
				<table>
						<tr>
							<td><label class="left">Correo:</label></td>
							<td><input type="text" name="email" value="<?php echo $row->CorreoElectronico; ?>"/></td>
						</tr>
						<tr>	
							<td><label class="left">Telefono:</label></td>
							<td><input type="text" name="oficina" value="<?php echo $row->Oficina; ?>" /></td>
						</tr>
						<tr>
							<td><label class="left">Celular:</label></td>
							<td><input type="text" name="celular" value="<?php echo $row->Celular; ?>" /></td>
						</tr>						
						<tr>
							<td><label class="left">Radio:</label></td>
							<td><input type="text" name="radio" value="<?php echo $row->Radio; ?>"/></td>
						</tr>	
					</table>
			</div>
			
			<h5><a href="#">Ubicaci&oacute;n</a></h5>
			<div>
				<table>
						<tr>
							<td><label class="left">Calle:</label></td>
							<td><input type="text" name="calle" value="<?php echo $row->Calle; ?>" /></td>
						</tr>
						<tr>	
							<td><label class="left">Numero Externo:</label></td>
							<td><input type="text" name="numExterno" value="<?php echo $row->NumeroExt; ?>" /></td>
						</tr>
						<tr>
							<td><label class="left">Numero Interno:</label></td>
							<td><input type="text" name="numInterno" value="<?php echo $row->NumeroInt; ?>"/></td>
						</tr>						
						<tr>
							<td><label class="left">Colonia:</label></td>
							<td><input type="text" name="colonia" value="<?php echo $row->Colonia; ?>" /></td>
						</tr>
						<tr>
							<td><label class="left">Codigo postal:</label></td>
							<td><input type="text" name="cp" value="<?php echo $row->CodigoPostal; ?>"/></td>
						</tr>
						<tr>
							<td><label class="left">Municipio:</label></td>
							<td><input type="text" name="municipio" value="<?php echo $row->Municipio; ?>"/></td>
						</tr>
						<tr>
							<td><label class="left">Estado:</label></td>
							<td><input type="text" name="estado" value="<?php echo $row->Estado; ?>"/></td>
						</tr>
						<tr>
							<td><label class="left">Pais:</label></td>
							<td><input type="text" name="pais" value="<?php echo $row->Pais; ?>"/></td>
						</tr>	
					</table>
			</div>
			<h5><a href="#">Datos Fiscales</a></h5>
			<div>
				<table>
						<tr>
							<td><label class="left">RFC:</label></td>
							<td><input type="text" name="rfc" value="<?php echo $row->RFC; ?>"/></td>
						</tr>
						<tr>	
							<td><label class="left">Razon Social:</label></td>
							<td><input type="text" name="razonSocial" value="<?php echo $row->RazonSocial; ?>"/></td>
						</tr>
						
					</table>
			</div>
			
		
		</div>
		<?php endforeach; ?>
		<!-- Simple Sorting Table: End -->
		<button>Crear</button>
		</form>	
	</div>
	<!-- Box Content: End -->
</div>
	