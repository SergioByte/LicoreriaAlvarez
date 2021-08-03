<?php

    include_once("../model/EntityProductos.php");

    if(isset($_POST['arrayProductos'])){

        $arrayRecibido=json_decode($_POST["arrayProductos"], true );
 
        $objEntityProductos = new EntityProductos;
        $objEntityProductos->guardarProducto($arrayRecibido[0],$arrayRecibido[3],$arrayRecibido[2],$arrayRecibido[1]);
    
        echo "Se ha insertado el producto";
        //foreach($arrayRecibido as $valor)
        //{
        //    echo "\n- ".$valor;
        //}

    }
    
    if(isset($_POST['arrayProductosActualizar'])){

        $arrayRecibido=json_decode($_POST["arrayProductosActualizar"], true );
        $objEntityProductos = new EntityProductos;
        $objEntityProductos->editarProducto($arrayRecibido[0],$arrayRecibido[3],$arrayRecibido[2],$arrayRecibido[1]);

        echo "Se actualizado el producto";

    }
   
?>