<?php
session_start();
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];

    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = [];
    }

    $_SESSION['carrito'][] = [
        'id' => $id,
        'nombre' => $nombre,
        'precio' => $precio
    ];

    echo json_encode(['exito' => true, 'cantidadCarrito' => count($_SESSION['carrito'])]);
} else {
    echo json_encode(['exito' => false]);
}
?>