<?php
    
    if(isset($_POST['operacion'])){
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        
        if (valida($numero1, $numero2) == true){       
           pinta($numero1, $numero2);
            //var_dump($_POST);
          //  header("Location: formulario.php?numero1=$_GET['numero1']&numero2=$_GET['numero2']&operacion=$_GET['operacion']");
 
        } else {
            header("Location: formulario.php");
        }
        
    }


 
    function pinta($numero1, $numero2){
        $resultado = "";
        switch($_POST['operacion']){
            case "Sumar":                    
                $resultado = "La suma de los números es ". ($numero1+$numero2);
            break;
            case "Restar":
                $resultado = "La resta de los números es ". ($numero1-$numero2);
            break;
            case "Multiplicar":
                $resultado = "La multiplicación de los números es ". ($numero1*$numero2);
            break;
            case "Dividir":                    
                $resultado = "La división de los números es ". ($numero1/$numero2);
            break;
        }
        print $resultado;
    }


    //Pasar al header el $_GET
   // si $_GET['sumar'] es true, volver con el header y pintar en formulario

    //Valida devuelve un array bidimiensional, asociativo(clave=al nombre que tenga post, valor), en el que se guardan los errores
    function valida($numero1, $numero2){
        if(is_numeric($numero1) && is_numeric($numero2)){
            return true;
        } else {
            return false;
        }
    }

?>