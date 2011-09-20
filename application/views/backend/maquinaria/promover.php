<!-- 100% Box Grid Container: Start -->
<div class="grid_24">
	<!-- Box Header: Start -->
		<form method="post" action="../../../backend/promociones/crear" class="formItem">
		<!-- Simple Sorting Table: Start -->
		<div class="box_top">
		<h2 class="icon frames">Promover Maquinaria</h2>
		</div>
		<!-- Box Header: End -->
	
		<!-- Box Content: Start -->
		<div class="box_content padding">
			<h3>Agregar imagenes a:</h3>
				<?php if(isset($maquina)) : foreach($maquina->result() as $row) : ?>	
					<?php echo '<h4><b>Maquina:</b>'.$row->Maquina.
							', <b>Tipo:</b>'.$row->Tipo.
							', <b>Marca:</b>'.$row->Marca.
							', <b> Modelo:</b>'.$row->Modelo .'</h4>';
							$id = $row->IdMaquina;?>
				<?php endforeach; ?>
				<?php endif; ?>
				<div>
					<table>
						<tr>
							<td><label class="left">PrecioPromocional:</label></td>
							<td>
							<input type="hidden" name="idUser" value="<?php echo $this->session->userdata('UserId'); ?>">
							<input type="hidden" name="idMaquina" value="<?php echo $id; ?>"/>
							<input type="text" name="PrecioPromocional" class="validate"/></td>
						</tr>
						<tr>
							<td><label class="left">Texto promocional:</label></td>
							<td><textarea class="wysiwyg" name="TextoPromocional"></textarea></td>
						</tr>
					</table>
				</div>	
				
				<div id="gallery">
					<?php if(isset($images)) : foreach($images->result() as $row2) : ?>	
				<div >
				<input type="hidden" name="IdImagenes" value="<?php echo $row2->IdImagenes; ?>">
					<a href="<?php echo base_url().'images/'.$id.'/promo/'.$row2->file_name; ?>" class="popup">
					<img src="<?php echo base_url().'images/'.$id.'/promo/'.$row2->file_name; ?>"></a>
					<a href="<?php echo base_url(); ?>upload/delete/<?php echo $row2->IdImagenes; ?>" onClick="javascript: if(confirm('¿Esta seguro que desa borrar el registro?')){ return true; } else { return false;}" class="delete tip"  title="delete"><img src="<?php echo base_url() ?>img/backend/icon_small_error2.png"></a>
				</div>
			<?php endforeach; else: ?>
				<div id="blank_gallery">Por favor subir una imagen.</div>
			<?php endif; ?>
				</div>
				<button>Crear</button>
			</div>
					
		</form>	
		
		<div id="upload" class="box_content padding">
			
			<?php echo form_open_multipart('backend/site/do_upload');?>
			<input type="hidden" name="id" value="<?php echo $id;?>"/>
			<input type="file" name="userfile" size="20" />
			<br /><br />
			<input type="submit" value="upload" />
			</form>
		</div>

	<!-- Box Content: End -->
</div>
	