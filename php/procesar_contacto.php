<?php

// Asegúrate de que no se imprima nada antes de este punto
header('Content-Type: application/json');

// Incluir el archivo de conexión
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $nombre = $conn->real_escape_string($_POST['nombre']);
    $email = $conn->real_escape_string($_POST['email']);
    $asunto = $conn->real_escape_string($_POST['asunto']);
    $mensaje = $conn->real_escape_string($_POST['mensaje']);

    // Preparar la consulta SQL
    $sql = "INSERT INTO contactos (nombre, email, asunto, mensaje) VALUES ('$nombre', '$email', '$asunto', '$mensaje')";

    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        http_response_code(200);
        echo json_encode(["success" => true, "message" => "Mensaje enviado correctamente"]);
    } else {
        http_response_code(500);
        echo json_encode(["success" => false, "message" => "Error en la base de datos: " . $conn->error]);
    }
} else {
    http_response_code(405);
    echo json_encode(["success" => false, "message" => "Método no permitido"]);
}

// Cerrar la conexión
$conn->close();
?>
