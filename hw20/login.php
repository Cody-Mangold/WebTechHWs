<?php
echo '<section id = "home" >';


if(!isset($_POST['submit']))
{

// Retrieve errMsg from GET parameters
$errMsg = isset($_GET['errMsg']) ? $_GET['errMsg'] : '';

// Switch statement to handle different error cases
switch ($errMsg) {
  case "invalidAuth":
    echo "<div style='color: red; font-size: 20px; border: 2px solid red; padding: 10px; background-color: #f2f2f2;'>Login information is incorrect, please re-enter.</div>";
    break;
  case "InvalidSid":
    echo "<div style='color: red; font-size: 20px; border: 2px solid red; padding: 10px; background-color: #f2f2f2;'>You are not logged in an authorized account. Please use the appropriate credentials.</div>";
    break;
  case "NullSid":
    echo "<div style='color: red; font-size: 20px; border: 2px solid red; padding: 10px; background-color: #f2f2f2;'>You are not logged into an account. Please log in!</div>";
    break;
  case "regSuccess":
        echo "<div style='color: green; font-size: 20px; border: 2px solid green; padding: 10px; background-color: #f2f2f2;'>Registration successful! You can now log in.</div>";
        break;
}

echo '<h2>LOGIN: Please enter your account information below.</h2>';
echo '<form method = "post" action = "">';
echo ' <div  class = "form-group">';
echo' <label class = "control-label" for="username">Username: </label>';
echo ' <input type="text" class = "form-control" id="username" name = "username"/>';
echo '<div id="fNamefeedback" ></div>';
echo '</div>';
echo ' <div  class = "form-group">';
echo' <label class = "control-label" for="password">Password: </label>';
echo ' <input type="password" class = "form-control" id="password" name = "password"/>';
echo '<div id="fNamefeedback" ></div>';
echo '</div>';
echo ' <div  class = "form-group">';
echo '<button class= "btn btn-primary" name = "submit" value = "submit">Submit</button>';
echo '</div>';
echo '</form>';	
}
if(isset($_POST['submit']))
{	

	$username = addslashes($_POST['username']);
	$passtext = $_POST['password'];
	$salt = "CS4413SP24";
	$password = hash('sha256',$salt.$passtext.$username);
	$dblink = db_connect("user_data");
	$sql = "Select `auto_id` from `accounts` where `auth_hash` = '$password'";
	$result =$dblink->query($sql) or
		die("<p> Something went wrong with $sql<br>".$dblink->error);
	if($result->num_rows<=0)
	{
		redirect("index.php?page=login&errMsg=invalidAuth");
	}
	else
	{
	
		$salt = microtime();	
		$sid = hash('sha256',$salt.$password);
		$sql = "Update `accounts` set `session_id` = '$sid' where `auth_hash`='$password'";
		$dblink->query($sql) or
			die("<p> Something went wrong with $sql<br>".$dblink->error);
		
		redirect("index.php?page=results&sid=$sid");
	}
}
echo '</section>';
?>