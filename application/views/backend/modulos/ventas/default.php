<!-- 100% Box Grid Container: Start -->
<div class="grid_24">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<a name="news"></a>
		<h2 class="icon pages">Marcas<span>232</span></h2>
		
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
			Selecciona el producto a vender:
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
								<a href="<?php echo base_url('backend/ventas/agregar/'.$row->IdMaquina);  ?>" class="edit tip" id="botonSell" title="sell">Sell</a>
							</td>
						</tr>
						<?php endforeach; ?>
						<?php endif; ?>

					</tbody>
				</table> 
			</div>
		</div>
	</div>
</div>			