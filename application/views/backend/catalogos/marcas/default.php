<!-- 100% Box Grid Container: Start -->
<div class="grid_24">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<a name="news"></a>
		<h2 class="icon pages">Marcas<span><a href="#crear" class="popup linkItem">Crear</a></span></h2>			

		
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
							<th class="align_left">Id</th>
							<th class="align_left ">Descripci&oacute;n Esp</th>
							<th class="align_left ">Descripci&oacute;n Ing</th>
							<th class="align_left center tools">Acciones</th>
						</tr>
					</thead>
					<tbody>
						<?php if(isset($records)) : foreach($records as $row) : ?>
						<tr>
							<td class="align_left"><?php echo $row->IdMarca; ?></td>
							<td class="align_left "><?php echo $row->Marca; ?></td>
							<td class="align_left "><?php echo $row->Brand; ?></td>
							<td class="align_left center tools">
								<a href="marcas/editar/<?php echo $row->IdMarca; ?>/<?php echo $row->Marca; ?>/<?php echo $row->Brand; ?>" class="edit tip popup linkItem" id="botonEdit" title="edit">edit</a>
								<a href="marcas/eliminar/<?php echo $row->IdMarca; ?>" onClick="javascript: if(confirm('¿Esta seguro que desa borrar el registro?')){ return true; } else { return false;}" class="delete tip" id="botonDelete" title="delete">delete</a>
							</td>
						</tr>
						<?php endforeach; ?>
						<?php endif; ?>
					</tbody>
				</table> 
				
			</div>

			<div id="crear" class="box_content padding hide">
				<div class="field">
					<form action="marcas/crear" method="post">
					<table>
					<tr>
						<td><label class="left">Marca:</label></td>
						<td><input type="text" name="marca" class="validate"/></td>
					</tr>
					<tr>
						<td><label class="left">Brand:</label></td>
						<td><input type="text" name="brand" class="validate"/></td>
					</tr>	
					<tr style="display:none;">
						<td colspan="2"><button type="submit"> crear</button></input></td>
					</tr>
					</table>	
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

