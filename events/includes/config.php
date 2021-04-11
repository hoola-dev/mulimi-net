<?php
$site_url = 'http://www.events.mulimi.net';
//$site_url = 'http://www.events.mulimi.net/mulimi_form_v3';
//$site_url = 'http://localhost/events_mulimi';
$server_name = "localhost";
$user_name = "mulimine_events";//db username
$password = "wsjvLPLCMhGX";//db password
$database_name = "mulimine_events";//database name

// Create connection
$db_connection = new mysqli($server_name, $user_name, $password, $database_name);

// Check connection and show error if not connected
if ($db_connection->connect_error) {
  die("Connection failed: " . $db_connection->connect_error);
}

?>
