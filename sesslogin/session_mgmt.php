<?php 

function check()// here u can have logic to check if session variable is set,
                //if valid session allow further or else redirect back to login.
{
    if (isset($_SESSION["username"]) && !empty($_SESSION["username"]))
	{
        echo $_SESSION['username'];
	}
	else
	{
	
		finish(); //if the session is empty calls the function finish. destroys if any session is present and directs to the login page.
	}
    return;
}
function begin() //Starts the session
{
    session_start(); //session starts.
    return;
}

function finish() //unsets the SESSION variables and destroys the SESSION and directs to the login page;
{
    begin();
    unset($_SESSION["username"]);
    unset($_password["password"]);
    session_destroy();
    header("Location:login.php");
    return;
}

function initialise() //to initialise session variables only.
{
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] = $_POST["password"];
    return;

}
?>