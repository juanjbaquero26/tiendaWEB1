<?php

    include("BaseDatos.php");
    
    if (isset($_POST["botonEnvio"])){
        
        //1. recibir datos:
        $nombre=$_POST["nombreProducto"];
        $precio=$_POST["precio"];
        $descripcion=$_POST["descripcion"];
        $marca=$_POST["marcaProducto"];

        //2. Crear un objeto de la clase BaseDatos
        //2. Sacar una copia de la clase BaseDatos
        $transaccion= new BaseDatos();
        
        //3.Crear la consulta SQL para agregar datos
        $consultaSQL="INSERT INTO productos(nombreProducto,marcaProducto,descripcionProducto,precioProducto) VALUES ('$nombre','$marca','$descripcion','$precio')";

        //4.LLamar al metodo agregarDatos     
        $transaccion->agregarDatos($consultaSQL);

        
       
        
    }
?>