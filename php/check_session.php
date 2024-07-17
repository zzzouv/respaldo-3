<?php
session_start();
header('Content-Type: application/json');

if (isset($_SESSION['user_id']) && isset($_SESSION['username'])) {
    $justLoggedIn = isset($_SESSION['just_logged_in']) && $_SESSION['just_logged_in'];
    if ($justLoggedIn) {
        unset($_SESSION['just_logged_in']); // Eliminar la bandera después de usarla
    }
    echo json_encode([
        'loggedIn' => true, 
        'username' => $_SESSION['username'],
        'justLoggedIn' => $justLoggedIn
    ]);
} else {
    echo json_encode(['loggedIn' => false]);
}