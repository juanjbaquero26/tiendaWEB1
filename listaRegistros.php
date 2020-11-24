<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

<?php 

//Hacer una consulta en BD para tarer todos los usuarios

//1. Incluir el archivo donde esta nuestra clase BaseDatos
include("baseDatos.php");

//2. Crear la consulta SQL para buscar datos
$consultaSQL="SELECT * FROM productos WHERE 1";

//3. Crear un objeto de la clase BaseDatos y usar
//el metodo buscarDatos

$transaccion=new Basedatos();
$productos=$transaccion->buscarDatos($consultaSQL);


?>
<div class="container">
    <div class="row row-cols-1 row-cols-md-3">  
        <?php foreach($productos as $producto):?>
            <div class="col mb-4">
                <div class="card h-100">
                    <img src="<?php echo($producto["foto"])?>" class="card-img-top" alt="imagen">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo($producto["nombreProducto"])?></h5>
                        <p class="card-text"><?php echo($producto["marcaProducto"])?></p>
                        <p class="card-text"><?php echo($producto["precioProducto"])?></p>
                        <p class="card-text"><?php echo($producto["descripcionProducto"])?></p>
                        <a href="eliminarUsuarios.php?id=<?php echo($producto["idProducto"])?>" class="btn btn-danger">Eliminar</a>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editar<?php echo($producto["idProducto"])?>">
                        editar
                        </button>
                    </div>
                </div>
                <div class="modal fade" id="editar<?php echo($producto["idProducto"])?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="editarUsuario.php?id=<?php echo($producto["idProducto"]) ?>" method="POST">
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input type="text" class="form-control" name="nombreEditar" value="<?php echo($producto["nombreProducto"])?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Descripción:</label>
                                        <textarea class="form-control" name="descripcionEditar"> <?php echo($producto["descripcionProducto"])?>  </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>precio</label>
                                        <textarea class="form-control" name="precio"> <?php echo($producto["precioProducto"])?>  </textarea>
                                    </div>
                                    <button type="submit" class="btn btn-info" name="botonEditar">Editar</button>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach?>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>