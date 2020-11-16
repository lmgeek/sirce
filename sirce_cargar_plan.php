<?php 
require_once 'conexion.php';

function getCargaPlan(){
  $mysqli = getConn();
  $query = 'SELECT * FROM `unic_curric`';
  $result = $mysqli->query($query);
  $listasplan = '<option value="0">Elige una opción</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $listasplan .= "<option value='$row[id_unid_curri]'>$row[tipo_plan]</option>";
  }
  return $listasplan;
}

echo getCargarPlan();