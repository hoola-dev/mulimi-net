<?php
class Admin
{
    
    function __construct() {

    }
    
    /*
     * Check login
     */
    function checkLogin($db_connection, $email, $password) {
        if ($result = $db_connection->query("SELECT * FROM admin where email = '" . $email . "' and password = '" . md5($password) . "'")) {
          if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            return $row;
          }
        }
        return false;
    }

    
}
?>