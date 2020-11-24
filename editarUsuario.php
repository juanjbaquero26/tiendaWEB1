<?php 

    include("baseDatos.php");

    if(isset($_POST["botonEditar"])){

        
        $nombre=$_POST["nombreEditar"];
        $descripcion=$_POST["descripcionEditar"];
        $precio=$_POST["precio"];

        
        $id=$_GET["id"];

        $transaccion=new BaseDatos();

        
        $consultaSQL="UPDATE productos SET nombreProducto='$nombre',descripcionProducto='$descripcion',precioProducto= '$precio' WHERE idProducto='$id'";
        
       
        $transaccion->editarDatos($consultaSQL);

      
        header("location:listaRegistros.php");





    }





?>