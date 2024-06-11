<?php
echo '<section id = "home" >';

echo '<h2>Registration: Please fill out the form below for account creation.</h2>';
if(!isset($_POST['submit']))
{
$errMsg = isset($_GET['errMsg']) ? $_GET['errMsg'] : '';
switch ($errMsg) {
  case "accountExists":
    echo "<div style='color: red; font-size: 20px; border: 2px solid red; padding: 10px; background-color: #f2f2f2;'>That Account already exists, please choose different information</div>";
    break;
	default:
	break;
}

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
echo '<button class= "btn btn-primary" name = "submit" value = "submit">Submit</button>';
echo '</form>';	
}
if(isset($_POST['submit']))
{	

	$username = addslashes($_POST['username']);
	$passtext = $_POST['password'];
	$salt = "CS4413SP24";
	$password = hash('sha256',$salt.$passtext.$username);
	$dblink = db_connect("user_data");
	$sql = "Select `auto_id` from `accounts` where `username` = '$username'";
	$result =$dblink->query($sql) or
		die("<p> Something went wrong with $sql<br>".$dblink->error);
	if($result->num_rows>0)
	{
		redirect("index.php?page=register&errMsg=accountExists");
	}
	else
	{
	$sql = "Insert into `accounts` (`username`,`auth_hash`) values ('$username','$password')";
	$dblink->query($sql) or
		die("<p> Something went wrong with $sql<br>".$dblink->error);
	redirect("index.php?page=login&errMsg=regSuccess");
	}
}
echo '</section>';
?>
