<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Validar campos obligatorios
    if (empty($_POST['nombre']) || empty($_POST['email']) || empty($_POST['telefono']) || 
        empty($_POST['cafe']) || empty($_POST['tamano']) || empty($_POST['pago'])) {
        
        echo "Por favor completa todos los campos obligatorios.";
    
    } else {
        
        $nombre   = htmlspecialchars($_POST['nombre']);
        $email    = htmlspecialchars($_POST['email']); // ojo: aquí debe coincidir con el name del formulario
        $telefono = htmlspecialchars($_POST['telefono']);
        $cafe     = htmlspecialchars($_POST['cafe']);
        $tamano   = htmlspecialchars($_POST['tamano']);
        $pago     = htmlspecialchars($_POST['pago']);
        $comen    = htmlspecialchars($_POST['comen']);

        $extras = isset($_POST['extras']) ? implode(", ", $_POST['extras']) : "sin extras";

    
        echo "Pedido de café Aurora";
        echo "<p>Cliente: $nombre</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Número de contacto: $telefono</p>";
        echo "<p>Café: $cafe $tamano</p>";
        echo "<p>Extras: $extras</p>";
        echo "<p>Método de pago: $pago</p>";
        echo "<p>Comentarios: $comen</p>";
    }

} else {
    echo "Acceso inválido. Por favor envía el formulario.";
}
?>
