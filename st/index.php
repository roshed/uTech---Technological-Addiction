<?php 
//Project by https://github.com/roshed
session_start();
error_reporting(E_ALL); // poziom raportowania, http://pl.php.net/manual/pl/function.error-reporting.php
ini_set('display_errors', 1);

require_once('options.php');
require_once('engine.php');
require_once('load.php');
require_once('request.php');
//documents folder
$first = 'view'; // First folder in sitehell libelary.
$second = 'layout'; // Second folder in sitehell libelary.
$three = 'template'; // Third folder in sitehell libelary.

//end navigation
//Start controller
$controller = 'index'; //Name project in $three folder, default is "index".
$top = 'header.php'; // Header file start in doctype, end </head>.
$bot = 'footer.php'; //Bottom doctype, start <footer> end </html>.

/*
Core Sitehell
*/
$layout = ($first.'/'.$second.'/');

//if get=view is empty, load index.php
$view = empty($_GET['view']) ? 'login' : $_GET['view']; 

//view to the get
//example is address.com/view=library
if(isset($_SESSION['zalogowany'])){	
	switch($view) {
		case 'login' :

		break;
		case 'index' :

		break;


		default: //if get not in switch
			$view='login';
		break;
	}
} else {
	$view='login';
}
//And you must add file.php to $first/$three
//Difoult 

//Load main controller.
$template = $first.'/'.$three; //template directory
require($first.'/'.$second.'/'.$controller.'.php');
/*
End-Core Sitehell
*/
?>