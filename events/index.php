<?php
include("includes/config.php");
include("includes/Event.class.php");

$err = isset($_GET['err']) ? $_GET['err'] : 0;
$success = isset($_GET['success']) ? $_GET['success'] : 0;
if(isset($_POST['submit'])){
    $event = new Event();
    $insert_id = $event->addEvent($db_connection);
    if (isset($insert_id) && ($insert_id > 0)) {
        header("Location: $site_url/index.php?success=1");
    } else {
       header("Location: $site_url/index.php?err=1");
    }
}
?>
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Event Sign Up Form | Mulimi </title>



    <!-- Font Icon -->

    <link rel="stylesheet" href="<?php echo $site_url;?>/assets/fonts/material-icon/css/material-design-iconic-font.min.css">

<!-- web-fonts -->  

<link href="//fonts.googleapis.com/css?family=Frank+Ruhl+Libre:300,400,500,700,900" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

<!-- //web-fonts -->

    <!-- Main css -->

    <link rel="stylesheet" href="<?php echo $site_url;?>/assets/css/style.css">

</head>

<body>



    <div class="main">



        <div class="container">

            <?php
              if(isset($success) && ($success == 1)){
              ?>
                <div class="show-success">
                    Successfully registered!
                </div>
              <?php
              }
              ?>

              <?php
              if(isset($err) && ($err == 1)){
              ?>
                <div class="show-error">
                 Failed to register..
               </div>
              <?php
              }
            ?>

            <form method="POST" class="appointment-form" id="appointment-form" onsubmit="return checkForm(this);">

                <a class="navbar-brand" href="<?php echo $site_url;?>/"><img src="<?php echo $site_url;?>/assets/images/Logo.png"></a>

                <h2>Event registration form</h2>

                <div class="form-group-1">

                    <input type="text" name="first_name" id="first_name" placeholder="First Name" maxlength="200" required />

                    <input type="text" name="second_name" id="second_name" placeholder="Second Name" maxlength="200" required />

                    <input type="email" name="email" id="email" maxlength="100" placeholder="Email" required />

                    <input type="number" maxlength="15" name="phone_number" id="phone_number"  placeholder="Phone number" required />

                    <input type="text" name="organization" id="organization" placeholder="Organization" maxlength="200" required />

                    <input type="number" name="organization_number" id="organization_number" maxlength="15" placeholder="Organization Phone number" required />

                    

                </div>

              

                <div class="form-check">

                    <input type="checkbox" name="terms" id="agree-term" class="agree-term"/>

                    <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree to the  <a href="#" class="term-service">Terms and Conditions</a></label>

                </div>

                <div id="error_holder">
                </div>

                <div class="form-submit">

                    <input type="submit" name="submit" id="submit" class="submit" value="Register Now!" />

                </div>

            </form>

        </div>



    </div>



    <!-- JS -->

    <script src="<?php echo $site_url;?>/assets/vendor/jquery/jquery.min.js"></script>

    <script src="<?php echo $site_url;?>/assets/js/main.js"></script>
    <script src="<?php echo $site_url;?>/assets/js/scripts.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>