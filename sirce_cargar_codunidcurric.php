<?php
require_once 'conexion.php';

function getListasuc(){

	$mysqli = getConn();
	$query = 'SELECT * FROM `unid_curric`';
	$result = $mysqli->query($query);
  	$coduc = '<option value="0">Seleccione...</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $listas .= "<option value='$row[id_unid_curric]'>$row[unid_curric]</option>";
  }
  return $listas;
}

}
