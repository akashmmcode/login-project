<?php
include 'session_mgmt.php';
begin(); //session start.

check(); //checks if the session variable is set if valid session allow further or else redirect back to login.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" class="box">
<input type="submit" name="submit" value="Submit" />

<?php
if (isset($_POST["submit"])){
    finish(); //checks for session if empty calls the function finish. destroys if any session is present and directs to the login page.
}
?>

    </body>
    </html>