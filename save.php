<?php

// if ( checked ) 

$nom = $_POST['name'];
$telefon = intval( $_POST['telefon'] );
$email = $_POST['email'];
$altres = $_POST['altres'];
$comarca = $_POST['comarca'];
$municipi = $_POST['municipi'];
$barri = $_POST['barri'];
$info = $_POST['info'];
$places = intval( $_POST['places'] );
$entrada_dl = intval( $_POST['entrada_dl'] );
$entrada_dm = intval( $_POST['entrada_dm'] );
$entrada_dc = intval( $_POST['entrada_dc'] );
$entrada_dj = intval( $_POST['entrada_dj'] );
$entrada_dv = intval( $_POST['entrada_dv'] );
$sortida_dl = intval( $_POST['sortida_dl'] );
$sortida_dm = intval( $_POST['sortida_dm'] );
$sortida_dc = intval( $_POST['sortida_dc'] );
$sortida_dj = intval( $_POST['sortida_dj'] );
$sortida_dv = intval( $_POST['sortida_dv'] );

$query = "INSERT INTO compartircotxe ( nom, telefon, email, altres, comarca, municipi, barri, info, places, entrada_dl, entrada_dm, entrada_dc, entrada_dj, entrada_dv, sortida_dl, sortida_dm, sortida_dc, sortida_dj, sortida_dv, comentaris ) VALUES ( :nom, :telefon, :email, :altres, :comarca, :municipi, :barri, :info, :places, :entrada_dl, :entrada_dm, :entrada_dc, :entrada_dj, :entrada_dv, :sortida_dl, :sortida_dm, :sortida_dc, :sortida_dj, :sortida_dv, :comentaris )";
// echo $query;

$statement = $connection->prepare( $query );
$statement->bindParam( ':nom', $nom );
$statement->bindParam( ':telefon', $telefon );
$statement->bindParam( ':email', $email );
$statement->bindParam( ':altres', $altres );
$statement->bindParam( ':comarca', $comarca );
$statement->bindParam( ':municipi', $municipi );
$statement->bindParam( ':barri', $barri );
$statement->bindParam( ':info', $info );
$statement->bindParam( ':places', $places );
$statement->bindParam( ':entrada_dl', $entrada_dl );
$statement->bindParam( ':entrada_dm', $entrada_dm );
$statement->bindParam( ':entrada_dc', $entrada_dc );
$statement->bindParam( ':entrada_dj', $entrada_dj );
$statement->bindParam( ':entrada_dv', $entrada_dv );
$statement->bindParam( ':sortida_dl', $sortida_dl );
$statement->bindParam( ':sortida_dm', $sortida_dm );
$statement->bindParam( ':sortida_dc', $sortida_dc );
$statement->bindParam( ':sortida_dj', $sortida_dj );
$statement->bindParam( ':sortida_dv', $sortida_dv );
$statement->bindParam( ':comentaris', $comentaris );
$statement->execute();
