<div class="container" style="margin-top: 80px">
    <div class="jumbotron">
        <h2>Listado de productos</h2>
        
    </div>
    <div class="container">
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Referencia</th>
                    <th>Precio</th>
                    <th>Peso</th>
                    <th>Categoria</th>
                    <th>Stock</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($query as $data): ?>
                    <tr>
                        <th><?php echo $data['id']; ?></th>
                        <th><?php echo $data['nombre_de_producto']; ?></th>
                        <th><?php echo $data['referencia']; ?></th>
                        <th><?php echo $data['precio']; ?></th>
                        <th><?php echo $data['peso']; ?></th>
                        <th><?php echo $data['categoria']; ?></th>
                        <th><?php echo $data['stock']; ?></th>
                        <th>
                            <a href="index.php?m=producto&id=<?php echo $data['id']?>" class="btn btn-primary">Editar</a>
                            <a href="index.php?m=confirmarDelete&id=<?php echo $data['id']?>" class="btn btn-danger">Eliminar</a>
                        </th>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
</div>