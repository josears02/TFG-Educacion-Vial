<?php
include "dbConnection.php";
include  "validate.php";
$userName = $_POST['userName'];
$pass = hash("sha256", $_POST['pass']);

$sql = "SELECT userName FROM users WHERE userName = '$userName' AND password = '$pass'";
$result = $pdo->query($sql);

if($result -> rowCount()>0)
{
  $data = array('done' => true, 'message' => "Bienvenido $userName");
  echo json_encode($data);
  exit();
}

else {
  $data = array('done' => false, 'message' => "Error: Nombre de usuario o contraseña incorrecta");
  echo json_encode($data);
  exit();
}
 ?>
