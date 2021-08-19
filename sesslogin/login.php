<?php

// only do the includes in the php section above the html block
include 'session_mgmt.php';
begin(); //function call just to start a session.
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login_page</title>
    <link rel="stylesheet" href="login.css" />
  </head>
  <body>
  <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" class="box">
      <div>
        <h1>LOGIN</h1>
        <label for="username"></label>
        <input
          type="text"
          name="username"
          id="username"
          placeholder="Enter Username"
          minlength="5"
          maxlength="10"
          required
          />
        </div>
        <div>
          <label for="password"></label>
          <input
          type="password"
          name="password"
          id="password"
          placeholder="Enter password"
          minlength="5"
          maxlength="10"
          required
        />
        <input type="submit" name="submit" value="Submit" />

      </div>
    </form>
<?php

if (isset($_POST["submit"]) && !empty($_POST["submit"])){
  initialise();

  echo "<script> location.href='login2.php'</script>"; //redirection to login2.
}
?>	
  </body>
</html>