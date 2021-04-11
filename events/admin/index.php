<?php
session_start();
include("../includes/config.php");
include("../includes/Admin.class.php");

$err = isset($_GET['err']) ? $_GET['err'] : 0;
if(isset($_POST['submit'])){
    $admin = new Admin();
    $email = $db_connection->real_escape_string(trim($_POST['email']));
    $password = $db_connection->real_escape_string(trim($_POST['password']));
    $row = $admin->checkLogin($db_connection, $email, $password);
    if ($row) {
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        header("Location: $site_url/admin/registrations.php");
        exit;
    } else {
       header("Location: $site_url/admin/index.php?err=1");
       exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Login | Mulimi </title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Admin</h3></div>
                                    <div class="card-body">
                                        <?php
                                          if(isset($err) && ($err == 1)){
                                          ?>
                                            <div class="alert alert-danger">
                                             <strong>Error:</strong> Invalid Login..
                                           </div>
                                          <?php
                                          }
                                          ?>
                                        <form method="post" action="" id="frmLogin" novalidate>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input class="form-control py-4" id="email" name="email" type="email" placeholder="Enter Email" maxlength="100"/>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input class="form-control py-4" id="password" name="password" type="password" placeholder="Enter Password" maxlength="20"/>
                                            </div>
                                           
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <!-- <a class="btn btn-primary" href="javascript: void(0);" onclick="javascript:doLogin()">Login</a> -->
                                                <button name="submit" type="submit" class="btn btn-primary">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Mulimi 2020</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="js/admin_scripts.js"></script>
    </body>
</html>
