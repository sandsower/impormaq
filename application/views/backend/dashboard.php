<!-- 100% Box Grid Container: Start -->
<div class="grid_24">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<a name="news"></a>
		<h2 class="icon pages">Maquinaria</h2>
		<span><a href="site/crear">Crear</a></span>
		
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
							<th class="align_left ">Maquina</th>
							<th class="align_left ">Tipo</th>
							<th class="align_left ">Marca</th>
							<th class="align_left ">Modelo</th>
							<th class="align_left ">Precio</th>
							<th class="align_left ">Fotos</th>
							<th class="align_left  tools">Tools</th>
						</tr>
					</thead>
					<tbody>
						
						<?php if(isset($maquinas)) : foreach($maquinas as $row) : ?>
						<tr>
							
							<td class="align_left "><a href="site/getEspecifications/<?php echo $row->IdMaquina; ?>" class="popup"><?php echo $row->Maquina; ?></a></td>
							<td class="align_left "><?php echo $row->Tipo; ?></td>
							<td class="align_left "><?php echo $row->Marca; ?></td>
							<td class="align_left "><?php echo $row->Modelo; ?></td>
							<td class="align_left "><?php echo $row->Precio; ?></td>
							<td class="align_left "><a href="#" class="popup">Fotos</a></td>
							<td class="align_left center tools">
								
								<a href="site/promote/<?php echo $row->IdMaquina; ?>" class="edit tip" id="botonPromote" title="promote">Promote</a>
								<a href="site/editar/<?php echo $row->IdMaquina; ?>" class="edit" id="botonEdit" title="edit">edit</a>
								<a href="site/eliminar/<?php echo $row->IdMaquina; ?>" onClick="javascript: if(confirm('¿Esta seguro que desa borrar el registro?')){ return true; } else { return false;}" class="delete tip" id="botonDelete" title="delete">delete</a>
								<a href="site/imagenes/<?php echo $row->IdMaquina; ?>" class="edit tip" id="botonImages" title="images">Images</a>
								<a href="site/vender/<?php echo $row->IdMaquina; ?>" class="edit tip" id="botonSell" title="sell">Sell</a>
							</td>
						</tr>
						<?php endforeach; ?>
						<?php endif; ?>

					</tbody>
				</table> 
				
			</div>
			<!-- News Sorting Table: End -->
		</div>
		<!-- News Table Tabs: End -->

	</div>
	<!-- Box Content: End -->
	
</div>
<!-- 100% Box Grid Container: End -->

