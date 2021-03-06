<?php

header("Access-Control-Allow-Origin: * ");
header("Access-Control-Allow-Methods: PUT,POST, GET, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");


ini_set('display_errors', '0');
ini_set("log_errors", 0);
ini_set("error_log", "C:/xampp1/php/tmp/php-error.log");

ini_set('max_execution_time', 300);

$server_environment = "local"; //local/live

//date_default_timezone_set('UTC');
$doc= $_SERVER['DOCUMENT_ROOT'];


switch($server_environment){

case 'local':
	
	//live db for local
	define ( 'DB_SERVER', 'SUVETHAN-LAP' ); // SUVETHAN-LAP
	define ( 'DB_USER', 'sa' );
	define ( 'DB_PASS', 'NS12345#' ); // NS12345#
	define ( 'DBNAME', 'LMSData' ); // LMSData
	define ( 'DB_PORT', '1433' );
	define ( 'DBTYPE', 'mssql_local' );
	
	
	define ( 'DOC_ROOT', $doc .'/Ascentic/API/src/');
	define('CONTRACTS', DOC_ROOT . 'contracts/');
	define('MODELS', DOC_ROOT . 'models/');
	define('HELPERS', DOC_ROOT . 'helpers/');
	define('LOG_PATH', DOC_ROOT . 'logs/');
	define('MEDIA_PATH','/var/media');
	
	define('ADMIN_NAME','suvethan');
	define('ADMIN_EMAIL','suvethann10@gmail.com');
	define('CONTACT_EMAIL','suvethann10@gmail.com');
	
	require_once (DOC_ROOT . 'Ascentic.ProfileAPI/flight/Flight.php');
	Flight::set('flight.log_errors', false);
	require_once (DOC_ROOT . 'Ascentic.ProfileAPI/contracts/profile.php');
	require_once (DOC_ROOT . 'Ascentic.ProfileAPI/helpers/HttpRequestHelper.php');
	require_once(DOC_ROOT.'Ascentic.ProfileAPI/helpers/database.php');
	require_once (DOC_ROOT . 'Ascentic.ProfileAPI/helpers/Helper.php');
	include_once (DOC_ROOT . 'Ascentic.ProfileAPI/models/ProfileHandler.php');
	
	define('ACCOUNTREG_URL','http://localhost:8012/Ascentic/API/src/Ascentic.AccountAPI/account');

break;

case 'live':
	
break;
}


$view = "";
if(isset($_GET["view"]))
	$view = $_GET["view"];


?>
