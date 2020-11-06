<div class="container">
    <div class="jumbotron">
        <h2>Formulario de edición</h2>

    </div>
    <div class="col-md-6 col-md-offset-3">
        <div class="form-horizontal" style="">
            
            <form action="index.php?m=get_datosE" method="post">
            
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_id">ID:</label>
                    <div class="col-sm-10">
                <input type="text" class="form-control" name="txt_id" value="<?php echo $data['id']; ?>" readonly>
                                    
                </div>
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="nombre_de_producto">NOMBRE:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nombre_de_producto" value="<?php echo $data['nombre_de_producto']; ?>" required>
                    </div>
                    
                </div>
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="referencia">REFERENCIA:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="referencia" value="<?php echo $data['referencia']; ?>" required>
                    </div>
                    
                </div>
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="precio">PRECIO:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="precio" value="<?php echo $data['precio']; ?>" required>
                    </div>
                    
                </div>
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="peso">PESO:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="peso" value="<?php echo $data['peso']; ?>" required>
                    </div>
                    
                </div>
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="categoria">CATEGORIA:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="categoria" value="<?php echo $data['categoria']; ?>" required>
                    </div>
                    
                </div>
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="stock">STOCK:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="stock" value="<?php echo $data['stock']; ?>" required>
                    </div>
                    
                </div>
				
				
                <div class="form-group">
                    <div class="col-md-12 col-md-off-set-3">
                    <?php if($data['id']==""){ ?>
                        <input type="submit" class="btn btn-primary form-control" name="" value="Registrar">
                    <?php }  ?>
                    <?php if($data['id']!=""){ ?>
                    <input type="submit" class="btn btn-primary form-control" name="" value="Actualizar">
                    <?php }  ?>
                    </div>
                </div>
            </form>
            
        </div>
    </div>
    
</div>