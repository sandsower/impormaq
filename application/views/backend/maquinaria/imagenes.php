<div class="grid_24">
     
    <div class="box_top">
        <h2 class="icon frames">Subir Imagenes</h2>
    </div>
     
    <div class="box_content">
 
        <div class="box_content padding">
        <h3>Agregar imagenes a:</h3>
        <?php if(isset($maquina)) : foreach($maquina->result() as $row) : ?>   
            <?php echo '<h4><b>Maquina:</b>'.$row->Maquina.', <b>Tipo:</b>'.$row->Tipo.', <b>Marca:</b>'.$row->Marca.', <b> Modelo:</b>'.$row->Modelo .'</h4>'; $idMaquina = $row->IdMaquina;?>
        <?php endforeach; ?>
        <?php endif; ?>
        <?php if(isset($images)) : foreach($images->result() as $row2) : ?>    
                <div class="thumb">
                    <a href="<?php echo base_url().'images/'.$id.'/'.$row2->file_name; ?>" class="popup">
                    <img src="<?php echo base_url().'images/'.$id.'/thumbs/'.$row2->file_name; ?>"></a>
                    <br/><a href="<?php echo base_url(); ?>upload/delete/<?php echo $row2->IdImagenes; ?>" onClick="javascript: if(confirm('¿Esta seguro que desea borrar el registro?')){ return true; } else { return false;}" class="delete tip"  title="delete"><img src="<?php echo base_url() ?>img/backend/icon_small_error2.png"></a>
                                        <a href="<?php echo base_url(); ?>upload/makeDefault/<?php echo $idMaquina; ?>/<?php echo $row2->IdImagenes; ?>" onClick="javascript: if(confirm('¿Esta seguro que desea que esta sea la imagen predeterminada?')){ return true; } else { return false;}" class="popup default tip"  title="default"><img src="<?php echo base_url() ?>img/frontend/i_star_16.png"></a>
                                </div>
            <?php endforeach; else: ?>
                <div id="blank_gallery">Por favor subir una imagen.</div>
            <?php endif; ?>
        </div>
        <div id="upload" class="box_content padding">
            <?php if(isset($error)) : echo $error; endif;?>
            <?php echo form_open_multipart('upload/do_upload');?>
            <input type="hidden" name="id" value="<?php echo $id;?>"/>
            <input type="file" name="userfile" size="20" />
            <br /><br />
            <input type="submit" value="upload" />
            </form>
        </div>
 
    </div>
</div>        