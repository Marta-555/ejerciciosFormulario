<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <?php
    
    ?>

    <form action="procesa.php" method="POST">
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
        /*if(isset($_GET['operacion'])){
            $numero1 = $_GET['numero1'];
            $numero2 = $_GET['numero2'];
        }
        function pinta($numero1, $numero2){   
            switch($_GET['operacion']){
                $resultado = "";
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
        } else {
            echo "ERROR en el contenido";
        }
        */
    


    ?>

   

</body>
</html>
