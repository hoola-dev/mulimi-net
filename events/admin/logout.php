<?php
session_start();
session_destroy();
include("../includes/config.php");
header("Location: $site_url/admin/index.php");
exit;
?>

