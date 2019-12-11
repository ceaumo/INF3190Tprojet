<?php
include 'config.php';
$db_connection = mysqli_connect( $db_host, $db_user, $db_password, $db_name );
$sql = 'SELECT * FROM membres';
$result = mysqli_query( $db_connection, $sql );

$ensembleMembres = array();

$cadre = array( 'id'=>'CADRE', 'parent' => '#', 'text' => 'Cadres du syndicat', 'icon' => '../img/cadre.jpg' );
$delegue = array( 'id'=>'DELEGUE', 'parent' => '#', 'text' => 'Délégués syndicaux', 'icon' => '../img/delegue.jpg' );
$membre = array( 'id'=>'MEMBRE', 'parent' => '#', 'text' => 'Simples membres', 'icon' => '../img/membre.jpg' );

$ensembleMembres[] = $cadre;
$ensembleMembres[] = $delegue;
$ensembleMembres[] = $membre;
while( $ligne = $result->fetch_array()) {
   $unMembre = array( 'id'=>$ligne['id'], 'parent' => $ligne['fonction'], 'text' => $ligne['prenom'].' '.$ligne['nom'], 'icon' => '../img/'.$ligne['photo'] );
    $ensembleMembres[] = $unMembre;
}

header( 'Content-Type: application/json; charset=utf-8' );
echo json_encode( $ensembleMembres );
?>

