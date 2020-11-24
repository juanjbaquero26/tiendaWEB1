<?php

    include("BaseDatos.php");
    
    if (isset($_POST["botonEnvio"])){
        
        
        $nombre=$_POST["nombreProducto"];
        $precio=$_POST["precio"];
        $descripcion=$_POST["descripcion"];
        $marca=$_POST["marcaProducto"];
        $foto=$_POST["foto"];

      
        $transaccion= new BaseDatos();
        
       
        $consultaSQL="INSERT INTO productos(nombreProducto,marcaProducto,descripcionProducto,precioProducto,foto) VALUES ('$nombre','$marca','$descripcion','$precio','$foto')";

       
        $transaccion->agregarDatos($consultaSQL);

        
       
        
    }
?>