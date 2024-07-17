<?php
session_start();
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numero = $_POST['numero'];
    $nombre = $_POST['nombre'];
    $mes = $_POST['mes'];
    $year = $_POST['year'];
    $ccv = $_POST['ccv'];
    
    // Obtener el ID del usuario (asumiendo que está guardado en la sesión después del login)
    $usuario_id = $_SESSION['usuario_id'] ?? null;

    if (!$usuario_id) {
        echo json_encode(['exito' => false, 'error' => 'Usuario no identificado']);
        exit;
    }

    // Iniciar transacción
    $conn->begin_transaction();

    try {
        // Insertar cada producto del carrito en la tabla ventas
        foreach ($_SESSION['carrito'] as $producto) {
            $producto_id = $producto['id'];
            $stmt = $conn->prepare("INSERT INTO ventas (usuario_id, producto_id) VALUES (?, ?)");
            $stmt->bind_param("ii", $usuario_id, $producto_id);
            $stmt->execute();
            $id_venta = $conn->insert_id;
            $stmt->close();
        }

        // Commit la transacción
        $conn->commit();

        // Limpiar el carrito
        unset($_SESSION['carrito']);
        
        echo json_encode(['exito' => true, 'idVenta' => $id_venta]);
    } catch (Exception $e) {
        // Rollback en caso de error
        $conn->rollback();
        echo json_encode(['exito' => false, 'error' => $e->getMessage()]);
    }
} else {
    echo json_encode(['exito' => false, 'error' => 'Método no permitido']);
}

$conn->close();
?>
