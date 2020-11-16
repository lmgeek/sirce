<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors',1);
  //Archivo 'captcha.php'
  function randomText($length) {
    //
    $pattern = "23456789abcdefghijkmnpqrstuvwxyzXYZ";
    $key='';
    for($i=0;$i<$length;$i++) {
      $key.= $pattern[rand(0,30)];
    }
    return $key;
  }
  //Guardo el valor del captcha en una variable de sesion
  $_SESSION['tmptxt'] = randomText(7);
  /*
   * Establesco la imagen *.gif que luego lo usamos para colorear el string bool
   * imagestring ( resource $image , int $font , int $x , int $y , string $string , int $color )
   */
  $captcha = imagecreatefromgif('fondocaptcha.gif');
  $colText = imagecolorallocate($captcha, 100, 10, 200);
  imagestring($captcha, 50, 20, 8, $_SESSION['tmptxt'], $colText);
  //indico la cabecera
  header('Content-type: image/gif');
  imagegif($captcha);
  /*
  echo base64_encode(imagegif($captcha));
  */
 
  //Destruyo la imagen mostrada
  //imagedestroy($captcha);
?>
