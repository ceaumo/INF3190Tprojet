<?php
require 'config.php';

if (!$db_connection) {
 die('Base de donnees pas trouve');
}
$subs_name = utf8_decode($_POST['nom']);
$subs_last = utf8_decode($_POST['commentaire']);
$db_table_name="lieux";


 $insert_value = 'INSERT INTO `' . $db_name . '`.`'.$db_table_name.'` (`nom` , `commentaire`) VALUES ("' . $subs_name . '", "' . $subs_last . '")';

mysqli_select_db($db_connection, "Conexion ok ");
$retry_value = mysqli_query($db_connection, $insert_value);

if (!$retry_value) {
   die('Error: ' . mysqli_error());
}

header('Location: ../HTML/Success.html');

mysqli_close($mysqli);

?>