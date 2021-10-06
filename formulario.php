<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    if(isset($_POST['operacion'])){
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];

        //valida($numero1, $numero2)


        if (valida($numero1, $numero2) == true){       
            pinta($numero1, $numero2);
            //var_dump($_POST);
        } else {
            print "Error de contenido";
        }
    }
?>

<body>
    <?php
    
    ?>

    <form action="" method="POST">
        <h3>FORMULARIOS - Comunicación con servidor</h3>
        <p>
            Suma:<br>
            <input type="text" name="numero1" id="numero1"> 
            <input type="text" name="numero2" id="numero2">
        </p>
        <input type="submit" name="operacion" value="Sumar">
        <input type="submit" name="operacion" value="Restar">
        <input type="submit" name="operacion" value="Multiplicar">
        <input type="submit" name="operacion" value="Dividir">        
       
    </form>

    <?php
       function valida($numero1, $numero2){
            if(is_numeric($numero1) && is_numeric($numero2)){
                return true;
            } else {
                return false;
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

    //Valida tiene que devolver un array bidimiensional, asociativo(clave=al nombre que tenga post, valor), en el que se guardan los errores
    ?>

   

</body>
</html>
