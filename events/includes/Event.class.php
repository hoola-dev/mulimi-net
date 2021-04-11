<?php
class Event
{
    
    function __construct() {

    }
    
    /*
     * Save registration details
     */
    function addEvent($db_connection) {
        $first_name = $db_connection->real_escape_string(trim($_POST['first_name']));
        $second_name = $db_connection->real_escape_string(trim($_POST['second_name']));
        $email = $db_connection->real_escape_string(trim($_POST['email']));
        $phone_number = $db_connection->real_escape_string(trim($_POST['phone_number']));
        $organization = $db_connection->real_escape_string(trim($_POST['organization']));
        $organization_number = $db_connection->real_escape_string(trim($_POST['organization_number']));
        
        $query = "INSERT INTO  event_registrations 
        (
            first_name,
            second_name,
            email,
            phone_number,
            organization,
            organization_phone
        ) VALUES 
        (
            '" . $first_name ."',
            '" . $second_name ."',
            '" . $email ."',
            '" . $phone_number ."',
            '" . $organization ."',
            '" . $organization_number ."'
        )";

        if ($db_connection->query($query) == true) {
           $insert_id = $db_connection->insert_id;
           return $insert_id;
        }
        return false;
    }

    /*
     * List event registrations
     */
    function listEvents($db_connection) {
        if ($results = $db_connection->query("SELECT * FROM event_registrations")) {
          return $results;
        }
        return false;
    }
    
}
?>