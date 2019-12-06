<?php
require 'config.php';

if (!$db_connection) {
 die('Base de donnees pas trouve');
}
$subs_lieuxManifestation = utf8_decode($_POST['lieuxManifestation']);
$subs_membreParticipant = utf8_decode($_POST['membreParticipant']);
$subs_date = utf8_decode($_POST['date']);
$db_table_name="manifestations";

 $insert_value = 'INSERT INTO `' . $db_name . '`.`'.$db_table_name.'` (`lieux` , `membre`, `date`) VALUES ("' . $subs_lieuxManifestation . '", "' . $subs_membreParticipant . '", "' . $subs_date . '")';

mysqli_select_db($db_connection, "Conexion ok ");
$retry_value = mysqli_query($db_connection, $insert_value);

if (!$retry_value) {
   die('Error: ' . mysqli_error());
}

header('Location: ../HTML/Success.html');
mysqli_close($db_connection);

?>

