<!-- 100% Box Grid Container: Start -->
<div class="grid_24">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<a name="news"></a>
		<h2 class="icon pages">Productos a vender<span>232</span></h2>
		
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
			<form action="ventas/completar" method="POST"  >
				<table class="sorting">
					<thead>
						<tr>				
							<th class="align_left ">Maquina</th>
							<th class="align_left ">Precio original</th>
							<th class="align_left ">Precio de venta</th>
							<th class="align_left ">Movimientos</th>
						</tr>
					</thead>
					<tbody>
						
						<?php if(isset($maquinas)) : foreach($maquinas as $row) : ?>
						<tr>
							<td class="align_left "><a href="site/getEspecifications/<?php echo $row['id']; ?>" class="popup"><?php echo $row['name']; ?></a></td>
							<td class="align_left "><?php echo $row['price']; ?></td>
							<td class="align_left "><input type="text" value="<? echo $row['price']; ?>" id="<? echo $row['price']; ?>" name="<? echo $row['id']; ?>" /></td>
							<td class="align_left "><a href="ventas/eliminar/<? echo $row['rowid'] ?>">Eliminar producto</a></td>
						</tr>
						<?php endforeach; ?>
						<?php endif; ?>
					</tbody>
				</table>
				<?php if(isset($clientes)): ?>
				<?php echo form_dropdown('cliente', $clientes); ?>
				<?php endif; ?>

				<input type="submit" value="Realizar venta">
			</form>
			</div>
		</div>
	</div>
</div>			