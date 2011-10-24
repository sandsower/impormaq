
<!-- 75% Box Grid Container: Start -->
<div class="grid_24">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon pages">Modificar Contenido</h2>
		
	</div>
	<!-- Box Header: End -->
	
	<div class="box_content">
		<form method="post" action="Contenido/modify" class="formItem">
		<!-- Simple Sorting Table: Start -->
		<div class="accordion">
		

			<h5><a href="#">Información</a></h5>
			
				<div>
					<table>
						<tr>
							<td><label class="left">Mision:</label></td>
							<td><textarea name="mision" rows="5" cols="100"><? if(isset($mision)) :
									echo $mision;?>
								<? endif; ?></textarea>
								
							</td>
						</tr>
						<tr>	
							<td><label class="left">Vision:</label></td>
							<td><textarea name="vision" rows="5" cols="100"><? if(isset($vision)) :
									echo $vision;?>
								<? endif; ?></textarea></td>
						</tr>
						<tr>
							<td><label class="left">Objetivo:</label></td>
							<td><textarea name="objetivo" rows="5" cols="100"><? if(isset($objetivo)) :
									echo $objetivo;?>
								<? endif; ?></textarea></td>
						</tr>						
						<tr>
							<td><label class="left">Politicas:</label></td>
							<td><textarea name="politicas" rows="5" cols="100"><? if(isset($politicas)) :
									echo $politicas;?>
								<? endif; ?></textarea></td>
						</tr>	
						<tr>
							<td><label class="left">Nosotros:</label></td>
							<td><textarea name="nosotros" rows="5" cols="100"><? if(isset($nosotros)) :
									echo $nosotros;?>
								<? endif; ?></textarea></td>
						</tr>
					</table>
				</div>
		
		</div>
		<!-- Simple Sorting Table: End -->
		<button>Modificar</button>
		</form>	
	</div>
	
</div>
<!-- 75% Box Grid Container: End -->