<?php

$config = parse_ini_file( '../../private/comparteix-cotxe/config.ini' );
if ( ! $config ) die( "Config access error" );

try {
	$connection = new PDO( 'mysql:host=' . $config['server'] . ';dbname=' . $config['database'],  $config['user'], $config['password'] );
} catch ( PDOException $e ) {
	die( "DB connection error: " . $e->getMessage() );
}
