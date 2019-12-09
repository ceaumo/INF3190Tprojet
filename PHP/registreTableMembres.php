<?php
if (($_FILES['my_file']['name']!="")){
  // Lieux Dans lequel le fichier va etre enregistre
   $target_dir = "../img/";
   $file = $_FILES['my_file']['name'];
   $path = pathinfo($file);
   $filename = $path['filename'];
   $ext = $path['extension'];
   $temp_name = $_FILES['my_file']['tmp_name'];
   $path_filename_ext = $target_dir.$filename.".".$ext;
   
  // Verifier sil y a deja un fichie avec le meme nom
  if (file_exists($path_filename_ext)) {
   echo "Le fichie existe deja !.";
   }else{
   move_uploaded_file($temp_name,$path_filename_ext);
   echo "Fichier téléchargé";
   }
  }

require 'config.php';

if (!$db_connection) {
 die('Base de donnees pas trouve');
}
//Creation de variables pour faire insert dans la table Membres
$subs_prenom = utf8_decode($_POST['prenom']);
$subs_nom = utf8_decode($_POST['nom']);
$subs_date = utf8_decode($_POST['datenaissance']);
$subs_fontion = utf8_decode($_POST['fonction']);
$db_table_name="membres";



$insert_value = 'INSERT INTO `' . $db_name . '`.`'.$db_table_name.'` (`prenom` , `nom` , `datenaissance` , `photo` , `fonction`) VALUES
  ("' . $subs_prenom . '", "' . $subs_nom . '", "' . $subs_date . '", "' . $path_filename_ext . '", "' . $subs_fontion . '")';

mysqli_select_db($db_connection, "Conexion ok ");
$retry_value = mysqli_query($db_connection, $insert_value);

if (!$retry_value) {
   die('Error: ' . mysqli_error());
}

//Affichage message de confirmation 
header('Location: ../HTML/Success.html');

//fermeture conexion
mysqli_close($db_connection);

?>