<?php
include "dbConnection.php";
include  "validate.php";
header('Content-Type: application/json'); // Siempre antes de cualquier salida

$userName = $_POST['userName'];
$pass = hash("sha256", $_POST['pass']);

// Comprobar si el usuario ya existe
$sql = "SELECT userName FROM users WHERE userName = :userName";
$stmt = $pdo->prepare($sql);
$stmt->execute(['userName' => $userName]);

if ($stmt->rowCount() > 0) {
    $data = array('done' => false, 'message' => "Error: nombre de usuario ya existe");
    echo json_encode($data);
    exit();
} else {
    $sql = "INSERT INTO users (userName, password) VALUES (:userName, :password)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['userName' => $userName, 'password' => $pass]);
    $data = array('done' => true, 'message' => "Usuario creado");
    echo json_encode($data);
    exit();
}
?>
