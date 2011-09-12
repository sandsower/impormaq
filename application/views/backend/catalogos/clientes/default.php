<!-- 100% Box Grid Container: Start -->
<div class="grid_24">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<a name="news"></a>
		<h2 class="icon pages">Clientes</h2>		<span><a href="clientes/crear" class="linkItem">Crear</a></span>	

		
		<!-- Tab Select: Start -->
		<ul class="sorting">
			<li><a href="#listing" class="active">Listar</a></li>
			<!--Anadir mas li's en caso de querer mas ventanas-->
		</ul>
		<!-- Tab Select: End -->
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content">
		
		<!-- News Table Tabs: Start -->
		<div class="tabs">
		
			<!-- News Sorting Table: Start -->
			<div id="listing">
				
				<table class="sorting">
					<thead>
						<tr>
							
							<th class="align_left ">Nombre</th>
							<th class="align_left ">Apellido</th>														
							<th class="align_left ">Empresa</th>
							<th class="align_left ">Pais</th>							
							<th class="align_left ">Domicilio</th>
							<th class="align_left ">Datos Fiscales</th>
							<th class="align_left center tools">Acciones</th>
						</tr>
					</thead>
					<tbody>
						<?php if(isset($records)) : foreach($records as $row) : ?>
						<tr>
							<td class="align_left"><?php echo $row->Nombres; ?></td>
							<td class="align_left "><?php echo $row->APaterno; ?></td>
							<td class="align_left "><?php echo $row->Empresa; ?></td>
							<td class="align_left "><?php echo $row->Pais; ?></td>
							<td class="align_left "><a href="clientes/Domicilio/<?php echo $row->IdClientes; ?>" class="popup linkItem">Domicilio</a></td>
							<td class="align_left "><a href="clientes/DatosFiscales/<?php echo $row->IdClientes; ?>" class="popup linkItem">Datos Fiscales</a></td>
							<td class="align_left center tools">
								<a href="clientes/editar/<?php echo $row->IdClientes;?>" class="edit tip popup linkItem" id="botonEdit" title="edit">edit</a>
								<a href="marcas/eliminar/<?php echo $row->IdClientes; ?>" onClick="javascript: if(confirm('¿Esta seguro que desa borrar el registro?')){ return true; } else { return false;}" class="delete tip" id="botonDelete" title="delete">delete</a>
							</td>
						</tr>
						<?php endforeach; ?>
						<?php endif; ?>
					</tbody>
				</table> 
				
			</div>

			<div id="crear" class="box_content padding hide">
				<div class="field">
					<form method="post" action="marcas/crear" id="formItem">
					<label class="left">Marca:</label>
					<input type="text" name="marca" class="validate"/>
					<button type="submit"> crear</button></input>
					</form>
				</div>
			</div>

			<div id="editar" class="box_content padding hide">
				marca
			</div>
			<!-- News Sorting Table: End -->
		</div>
		<!-- News Table Tabs: End -->
	</div>
	<!-- Box Content: End -->
</div>
<!-- 100% Box Grid Container: End -->

