<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
include "../../../josys/koneksi.php";
include "../../../josys/fungsi_thumb.php";

$module=$_GET[module];
$act=$_GET[act];

// Update technologys
if ($module=='technologys' AND $act=='update'){
  
    mysql_query("UPDATE modul SET static_content = '".mysql_real_escape_string($_POST[isi])."' 
                            WHERE id_modul       = '$_POST[id]'");
 
  header('location:../../media.php?module='.$module);
}
}
?>
