<?php
include "dbConnection.php";
$userName = $_POST['userName'];
$puntos = intval($_POST['puntos']); // Los puntos finales que quieres guardar

// Comprueba que el usuario existe
$sql = "SELECT puntos_nivel2 FROM users WHERE userName = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$userName]);

if($stmt->rowCount() > 0)
{
    // Actualiza los puntos (establece el valor)
    $sqlUpdate = "UPDATE users SET puntos_nivel2 = ? WHERE userName = ?";
    $stmtUpdate = $pdo->prepare($sqlUpdate);
    if($stmtUpdate->execute([$puntos, $userName])){
        $data = array('done' => true, 'message' => "Puntos actualizados correctamente");
        echo json_encode($data);
        exit();
    } else {
        $data = array('done' => false, 'message' => "Error al actualizar puntos");
        echo json_encode($data);
        exit();
    }
}
else {
    $data = array('done' => false, 'message' => "Usuario no encontrado");
    echo json_encode($data);
    exit();
}
?>
