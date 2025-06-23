<?php
$connectionPass = $_POST["connectionPass"];
$pc = $_POST["pcPassword"];

if($connectionPass == "j}&,v^>X<+>}579fqO[e>3)3x*|Z+OXQ>QBM[G@X:*jVb`J:AC_?GZHf*nL7_+")
{
  if($pc != "</:/yB<OtZytX]@ppLyoVY<'`prh")
  {
    $data = array('done' => false, 'message' => "Autentificación fallida");
    echo json_encode($data);
    exit();
  }

}

else
{
  $data = array('done' => false, 'message' => "Autentificación fallida");
  echo json_encode($data);
  exit();
}

 ?>
