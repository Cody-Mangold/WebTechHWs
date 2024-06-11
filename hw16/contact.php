
<!--home-->
  
     <section id = "home" >
		<?php
			session_start();
		 $pattern =  '/^[a-zA-Z\'-]{2,}$/';
		 $patterne =  '/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';
		 
		 $patternP = '/^[0-9]{10}$/';
		 

			if(!isset($_POST['submit']))
			{
		 		echo '<form method = "post" action = "" id = "mainForm" style = "padding:20px;margin=20px">';
		 		if(isset($_GET['errMsg']) && (strstr($_GET['errMsg'],"firstNameNull")|| !preg_match($pattern, $_GET['firstname'])))
				{
				
				
		 			echo ' <div id = "firstNameDiv" class = "form-group has-error">
					';
					echo ' <label class = "control-label" for="firstname">First Name: </label>';    
					echo ' <input type="text" class = "form-control" id="firstname" name = "firstname"/>';
					echo '<div id="fNamefeedback" >First Name cannot be blank.</div>';
					echo '	<span id="fNameStatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>';
					echo '</div>';
				}
			else	
			{
				//talk to Professor Valadez about the regex testing.
				
				if(isset($_SESSION['firstname']) && $_SESSION['firstname'] !='' || preg_match($pattern, $_GET['firstname']))
				{
				   echo ' <div id = "firstNameDiv" class = "form-group has-feedback has-success">';
					echo' <label class = "control-label" for="firstname">First Name: </label>';
					echo ' <input type="text" class = "form-control" id="firstname" name = "firstname" value = "'.$_SESSION['firstname'].'"/>';
					echo '<div id="fNamefeedback" ></div>';
					echo '<span id="fNameStatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>';
					echo '</div>';
				}
				else
				{
					echo ' <div id = "firstNameDiv" class = "form-group">';
					echo' <label class = "control-label" for="firstname">First Name: </label>';
					echo ' <input type="text" class = "form-control" id="firstname" name = "firstname"/>';
					echo '<div id="fNamefeedback" ></div>';
					echo '</div>';
					
				   
				}
			}
		 	
		 
		  
		
			if(isset($_GET['errMsg']) && (strstr($_GET['errMsg'],"lastName")|| !preg_match($pattern, $_GET['lastname'])))
				{
					echo '<div class = "form-group has-feedback has-error has-error">';
					echo '<label class = "control-label" for="lastname">Last Name: </label>';
					echo '<input type="text" class = "form-control" id="lastname" name = "lastname"  /> ';
					echo '<div id="lNamefeedback" >Last name cannot be blank!</div>';
					echo '<span id="lNameStatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>';
					echo '</div>';
				}
				
				else
				{
					if(isset($_SESSION['lastname']) && $_SESSION['lastname'] !='')
					{
					echo '<div class = "form-group has-feedback  has-success ">';
					echo '<label class = "control-label" for="lastname">Last Name: </label>';
					echo '<input type="text" class = "form-control" id="lastname" name = "lastname" value = "'.$_SESSION['lastname'].'" /> ';
					echo '<div id="lNamefeedback" ></div>';
					echo '<span id="lNameStatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>';
					echo '</div>';
						
					}
					
					else{

					echo '<div class = "form-group has-feedback ">';
					echo '<label class = "control-label" for="lastname">Last Name: </label>';
					echo '<input type="text" class = "form-control" id="lastname" name = "lastname" /> ';
					echo '<div id="lNamefeedback" ></div>';
					echo '<span id="lNameStatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>';
					echo '</div>';
					}
					
				}
			
			   
		       
		    
			if(isset($_GET['errMsg']) && (strstr($_GET['errMsg'],"email")|| !preg_match($patterne, $_GET['email'])))
			{
				echo ' <div class = "form-group has-feedback has-error">   ';
				echo ' <label class = "control-label" for="email">Email: </label>';        
				echo ' <input type="text" class = "form-control" id="email" name = "email" />   ';  
				echo ' <div id="emailfeedback" >Email cannot be blank.</div>';
				echo '	<span id="emailStatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>';
				echo '</div>';
			
			}
		
			else
			{
				
				if(isset($_SESSION['email']) && $_SESSION['email'] !='' )
					{
		 
		  		echo ' <div class = "form-group has-feedback has-success">   ';
				echo ' <label class = "control-label" for="email">Email: </label>';        
				echo ' <input type="text" class = "form-control" id="email" name = "email" value = "'.$_SESSION['email'].'" />   ';  
				echo ' <div id="emailfeedback" ></div>';
				echo '	<span id="emailStatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>';
				echo '</div>';
				}
				else
				{
					echo ' <div class = "form-group has-feedback">   ';
				echo ' <label class = "control-label" for="email">Email: </label>';        
				echo ' <input type="text" class = "form-control" id="email" name = "email" />   ';  
				echo ' <div id="emailfeedback" ></div>';
				echo '	<span id="emailStatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>';
				echo '</div>';
				}
			}
		 
			 
			if(isset($_GET['errMsg']) && (strstr($_GET['errMsg'],"phone")|| !preg_match($patternP, $_GET['phone'])))
			{
			echo ' <div class = "form-group has-feedback has-error">   ';
			echo '<label class = "control-label" for="phone">Phone number:  </label> ';   
			echo '<input type="text" class = "form-control" id="phone" name = "phone" /> ';     
			echo '<div id="phonefeedback" >Phone number cannot be blank</div>';
			echo '<span id="phoneStatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>';
			echo '</div>';	
			}
			else
			{
				if(isset($_SESSION['phone']) && $_SESSION['phone'] !='' )
				{
					echo ' <div class = "form-group has-feedback has-success">   ';
				echo '<label class = "control-label" for="phone"> Phone number:  </label>     ';   
				echo ' <input type="text" class = "form-control" id="phone" name = "phone" value = "'.$_SESSION['phone'].'" />   ';    
				echo '<div id="phonefeedback" ></div>';
				echo '<span id="phoneStatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>';
				echo '</div>';	
				
			}
			
			else
			{
				echo ' <div class = "form-group has-feedback">   ';
			echo '<label class = "control-label" for="phone">Phone number: </label>     ';   
			echo '<input type="text" class = "form-control" id="phone" name = "phone" /> ';     
			echo '<div id="phonefeedback" ></div>';
			echo '<span id="phoneStatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>';
			echo '</div>';	
				
			}

				
			}

		 	
		 
		 	if(isset($_GET['errMsg']) && strstr($_GET['errMsg'],"usernameNull"))
			{
			echo '<div class = "form-group has-feedback has-error">   ';
			echo '<label class = "control-label" for="username">Create a username: </label> ';   
			echo '<input type="text" class = "form-control" id="username" name = "username"  /> ';       
			echo '<div id="usernamefeedback" >Username cannot be blank</div>';
			echo '<span id="userStatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>';
			echo '</div>';
			}
			else
			{
				if(isset($_SESSION['username']) && $_SESSION['username'] !='' )
				{
				echo '<div class = "form-group has-feedback has-success">   ';
				echo '<label class = "control-label" for="username">Create a username: </label> ';   
				echo ' <input type="text" class = "form-control" id="username" name = "username" value = "'.$_SESSION['username'].'" />   ';    
				echo '<div id="usernamefeedback" ></div>';
				echo '<span id="userStatus" class="glyphicon form-control-feedback" aria-	hidden="true"></span>';
				echo '</div>';	
				
			}
			else
			{
				echo '<div class = "form-group has-feedback">   ';
				echo '<label class = "control-label" for="username">Create a username: </label> ';   
				echo '<input type="text" class = "form-control" id="username" name = "username" /> ';       
				echo '<div id="usernamefeedback" ></div>';
				echo '<span id="userStatus" class="glyphicon form-control-feedback" aria-	hidden="true"></span>';
				echo '</div>';	
			}

			
			}

		 	
	
			if(isset($_GET['errMsg']) && strstr($_GET['errMsg'],"passwordNull"))
			{
			echo '<div class = "form-group has-feedback has-error">';
			echo '<label class = "control-label" for="password">Create a password: </label> ';  
			echo '<input type="password" class = "form-control" id="password" name = "password" /> ';
			echo ' <div id="passwordfeedback">Password cannot be blank</div>';
			echo '<span id="passStatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>';
			echo '</div>';
			}
			else
			{
			if(isset($_SESSION['password']) && $_SESSION['password'] !='' )
				{
			echo '<div class = "form-group has-feedback has-success">';
			echo '<label class = "control-label" for="password">Create a password: </label> ';  
			echo '<input type="password" class = "form-control" id="password" name = "password" value = "'.$_SESSION['password'].'" /> ';
			echo ' <div id="passwordfeedback"></div>';
			echo '<span id="passStatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>';
			echo '</div>';	
			}
			else
			{
		
				echo '<div class = "form-group has-feedback">';
				echo '<label class = "control-label" for="password">Create a password: </label> ';  
				echo '<input type="password" class = "form-control" id="password" name = "password" /> ';
				echo ' <div id="passwordfeedback"></div>';
				echo '<span id="passStatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>';
				echo '</div>';
			}

				
			}
	
			
		 
		 	if(isset($_GET['errMsg']) && strstr($_GET['errMsg'],"commentsNull"))
			{
			echo '<div class = "form-group has-feedback">  '; 
			echo '<label class = "control-label" for="comments"> Comments: </label> ';   
			echo ' <textarea id = "comments" class = "form-control" name = "comments" ></textarea>';
			echo '<div id="Commentsfeedback" ></div>';
		 	echo '	<span id="commentsStatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>';
			echo '</div>';		
			}
			else
			{
			echo '<div class = "form-group has-feedback has-success">  '; 
			echo '<label class = "control-label" for="comments">Comments: </label> ';   
			echo ' <textarea id = "comments" class = "form-control" name = "comments">'. ($_SESSION['comments']) . '</textarea>';
			echo '<div id="Commentsfeedback" ></div>';
		 	echo '	<span id="commentsStatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>';
			echo '</div>';	
			}
	 	
	
				
			echo '<div class = "form-group">';
			echo '<button class = "btn btn-primary" type="submit"  value="submit" name = "submit" />Submit</button>';
			echo '</div>';
    

			
	
			echo '</form>';
			 
		 
			}
			
		 	
			else
			{
			$errors = "";
			$_SESSION = array();
			$firstName = $_POST['firstname'];
				
			if($firstName == NULL )
			{
			$errors = "firstNameNull";
			}
			else
			{
				$_SESSION['firstname'] = $firstName;
			}
				
			$lastName = $_POST['lastname'];
				
			if($lastName == NULL)
			{
			
				$errors .= "lastNameNull";
				
			}
				
			else
			{
				$_SESSION['lastname'] = $lastName;
			}
				
			$email = $_POST['email'];
			if($email == NULL)
			{
			
				$errors .= "emailNull";
				
			}
			else
			{
				$_SESSION['email'] = $email;
			}
			$phone = $_POST['phone'];
			if($phone == NULL)
			{
			
				$errors .= "phoneNull";
				
			}
			else
			{
				$_SESSION['phone'] = $phone;
			}
			
			$username = $_POST['username'];
				
			if($username == NULL)
			{
			
				$errors .= "usernameNull";
				
			}
			else
			{
				$_SESSION['username'] = $username;
			}
			$password = $_POST['password'];
			
			if($password == NULL)
			{
			
				$errors .= "passwordNull";
				
			}
			else
			{
				$_SESSION['password'] = $password;
			}
			$comments = $_POST['comments'];
			
			if($comments == NULL)
			{
			
				$errors .= "commentsNull";
				
			}
			else
			{
				$_SESSION['comments'] = $comments;
			}
			
			if ($errors != NULL)
			{
				
				header("Location: contact.php?errMsg=$errors");
			}
			

				
				
			echo "<h2>Hello from Results</h2>";
			echo '<p>First Name: '.$_POST['firstname'].'</p>';
			echo '<p>Last Name: '.$_POST['lastname'].'</p>';
			echo '<p>Email: '.$_POST['email'].'</p>';
			echo '<p>Phone Number '.$_POST['phone'].'</p>';
			echo '<p>Username: '.$_POST['username'].'</p>';
			echo '<p>Password: '.$_POST['password'].'</p>';
			echo '<p>Comments: '.$_POST['comments'].'</p>';
			}
		 

			
			
		?>
		 
	</section>
    


    



	<script src="assets/js/event-listener.js"></script>  
