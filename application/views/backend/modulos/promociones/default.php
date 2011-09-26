<!-- 100% Box Grid Container: Start -->
<?php //print_r($promociones); ?>
<div class="grid_24">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<a name="news"></a>
		<h2 class="icon pages">Promociones</h2>
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
							<th class="align_left ">TextoPromocional</th>
							<th class="align_left ">PrecioPromocional</th>
							<th class="align_left ">Fotos</th>
							<th class="align_left ">Imagen</th>
							<th class="align_left  tools">Tools</th>
						</tr>
					</thead>
					<tbody>
						
						<?php if(isset($promociones)) : foreach($promociones as $row) : ?>
						<tr>
							<td class="align_left ">
							<a href="promociones/Maquina/<?php echo $row->IdMaquina; ?>" class="popup"><?php echo $row->Maquina ?></a>
							</td>
							<td class="align_left ">
							<a href="promociones/textoPromocional/<?php echo $row->IdPromociones; ?>" class="popup">TextoPromocional</a></td>
							<td class="align_left "><?php echo $row->PrecioPromocional; ?></td>
							<td class="align_left "><a href="promociones/fotos/<?php echo $row->IdMaquina; ?>" class="popup">Fotos</a></td>
							<td class="align_left "><a href="<?php echo base_url().'images/'.$row->IdMaquina.'/promo/'.$row->file_name; ?>" class="popup">Imagen</a></td>
							<td class="align_left center tools">
								<a href="#" class="edit" id="botonEdit" title="edit">edit</a>
								<a href="#" onClick="javascript: if(confirm('¿Esta seguro que desa borrar el registro?')){ return true; } else { return false;}" class="delete tip" id="botonDelete" title="delete">delete</a>
								
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

