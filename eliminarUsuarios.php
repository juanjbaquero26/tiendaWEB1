<?php 

    include("baseDatos.php");

    //0. Recibir el id del registro a eliminar
    $id=$_GET["id"];
    echo($id);
    
    //1.Utilizar la base datos (sacarle copia a la clase)
    $transaccion= new BaseDatos();

    //2. crear la consulta SQL para eliminar registros
    $consultaSQL="DELETE FROM productos WHERE idProducto='$id'";

    //3. LLamar y utilizar el metodo eliminarDatos
    $transaccion->eliminarDatos($consultaSQL);




?>