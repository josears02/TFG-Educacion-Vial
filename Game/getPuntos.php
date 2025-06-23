<?php
include "dbConnection.php";
$userName = $_POST['userName'];

$sql = "SELECT puntos_nivel1, puntos_nivel2 FROM users WHERE userName = '$userName'";
$result = $pdo->query($sql);

if($result->rowCount() > 0)
{
    $row = $result->fetch(PDO::FETCH_ASSOC);
    $data = array(
        'done' => true,
        'puntos_nivel1' => intval($row['puntos_nivel1']),
        'puntos_nivel2' => intval($row['puntos_nivel2'])
    );
    echo json_encode($data);
    exit();
}
else {
    $data = array('done' => false, 'message' => "Usuario no encontrado");
    echo json_encode($data);
    exit();
}
?>
