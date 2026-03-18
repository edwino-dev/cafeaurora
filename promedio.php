<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="formulario">
        <form action="" method="post">

            <label for="id1">   ingrese nota 1: </label><br>
            <input type="number" id="id1" name="name1" step="0.01"><br>

            <label for="id2">     ingrese nota 2:       </label> <br>
            <input type="number" id="id2" name="name2" step="0.01"><br>

            <label for="id3">ingrese nota 3:            </label> <br>
            <input type="number" id="id3" name="name3" step="0.01"><br>

            <label for="id4">   ingrese nota 4:    </label> <br>
            <input type="number" id="id4" name="name4" step="0.01"> <br>

            <button type="submit">enviar</button>
        </form>
    </div>


    


    <?php
 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
     if (!empty($_POST['name1']) && !empty($_POST['name2']) && 
        !empty($_POST['name3']) && !empty($_POST['name4'])) {


        $name1= (float)$_POST["name1"];
        $name2 =(float) $_POST["name2"];
        $name3= (float)$_POST["name3"];
        $name4= (float)$_POST["name4"];
        } 
    // Función para calcular el promedio de un array de números
    function calcular_promedio($numeros) {
    $cantidad = count($numeros);
    if ($cantidad === 0) {
        return 0; // o lanzar un mensaje de error controlado
    }
    $suma = array_sum($numeros);
    return $suma / $cantidad;
}


    // Función para determinar si un estudiante aprueba
    function evaluar_nota($nota) {
    if ($nota >= 3.0) {
        return "Aprobado";
    } else {
        return "Reprobado";
    }
    }

    // Uso de las funciones
    $notas = [$name1,$name2,$name3,$name4];

    $promedio = calcular_promedio($notas);

    echo "Notas: " . implode(", ", $notas) . "<br>";
    echo "Promedio: " . number_format($promedio, 2) . "<br>";
    echo "Estado: " . evaluar_nota($promedio) . "<br>";
}
?>
</body>
</html>
