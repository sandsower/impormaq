
<!-- 75% Box Grid Container: Start -->
<div class="grid_24">
<script type="text/javascript" src="<?php echo base_url(); ?>js/Contenido/dropdown.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/Contenido/script.js"></script>

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon pages">Contenido</h2>
		
	</div>
	<!-- Box Header: End -->
	
	<div class="box_content">
		<!-- Simple Sorting Table: Start -->
		<div class="accordion">
		

			<h5><a href="#">Información</a></h5>
			
			<form method="post" action="contenido/modify" class="formItem">
				<div>
					<input class="tipo" type="radio" name="tipo" value="Editar" checked> Editar<br>
					<input class="tipo" type="radio" name="tipo" value="Crear"> Crear<br>
					<input class="tipo" type="radio" name="tipo" value="Borrar"> Borrar
					<table>
						<tr>
							<? if(isset($areas)):?>
							<label id="textoArea">Seleccione el area que desea modificar:</label><br/>
							<select name="area" id="area">
								<option value="0">--Seleccione Area--</option>
								<? foreach($areas as $area): ?>
									<option value=<? echo $area->Area; ?>><? echo $area->Area; ?></option>
								<? endforeach;?>
							</select>
							<? endif;?>
						</tr>
						<tr>
							<div id="SeleccionarContenido">
								<label id="textoContenido">Seleccione el contenido a mostrar:</label><br/>
								<select id="Contenido"  name="Contenido"></select>
							</div>
						</tr>
						<tr>
							<div id="ModTitulo">
								<label id="textoTitulo" >Titulo:</label><br/>
								<input type="text" id="titulo" />
							</div>
						</tr>
						<tr>
							<div id="ModTexto">
								<label id="textoTexto">Texto:</label><br/>
								<textarea id="texto" ></textarea>
							</div>
						</tr>
					</table>
				</div>
		</div>
		<!-- Simple Sorting Table: End -->
		</form>
		<button id="save">Guardar cambios</button>
	</div>
	
</div>
<!-- 75% Box Grid Container: End -->