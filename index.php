<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Php</title>
</head>
<body>
    <h1> Crud Php</h1>
    <fieldset>
        <legend>Ingrese sus Datos:</legend>
    <div class="formulario">
        <form action="" class="formulario" id="forms">
            <label for="nombre">Ingrese un nombre: </label><br><br>
            <input type="text" id="nombre" placeholder="juan perez" required><br>

            <label for="email" type="email">Ingrese un correo: </label><br><br>
            <input type="email" placeholder="ejemplo@coreo.com" id="email" required><br>

            <label for="edad" >Ingrese su edad:</label>     <br>  <br>     
            <input type="text" id="edad" placeholder="30" required><br>

            <button type="submit">enviar</button><br>
        </form>
    </fieldset>
    </div>
</body>
</html>

<?php
if($server['REQUES_METHOD'] === 'POST'){
    if(empty($_POST['NOMBRE']) || empty($_POST['email']) || empty($_POST['edad'])){

    echo "Por favor completa todos los campos";

    } else{

     $nombre = htmlspecialchars($_POST['nombre']);
     $email = htmlspecialchars($_POST['email']);
     $edad = htmlspecialchars($_POST['edad']);
    }






 }
    
?>


