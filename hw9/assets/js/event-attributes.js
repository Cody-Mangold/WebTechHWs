

function checkUsername() 

{                             // Declare function  

	var elMsg = document.getElementById('feedback');     // Get feedback element  
	var elUsername = document.getElementById('username'); // Get username input  
	
	
	if (elUsername.value.length < 5) 
		{                   // If username too short    

			elUsername.parentElement.classList.add("has-error");
			elUsername.parentElement.classList.remove("has-success");
			
			elMsg.innerHTML = 'Username must be 5 characters or more'; // Set msg  

		} 
	
	else 

		{                                              // Otherwise    
			elUsername.parentElement.classList.remove("has-error");
			elUsername.parentElement.classList.add("has-success");
			
				elMsg.innerHTML = ''; // Clear message  

		}

}
function checkPassword() {
    var elPassword = document.getElementById('password');
	var elMsg = document.getElementById('passwordFeedback');     // Get feedback element  


    if (elPassword.value.length < 5) 
	{
        elPassword.parentElement.classList.add("has-error");
		elPassword.parentElement.classList.remove("has-success");
        elMsg.innerHTML = 'Password must be 5 characters or more';
    } 
	
	else 
	{
		elPassword.parentElement.classList.add("has-success");
        elPassword.parentElement.classList.remove("has-error");
		elMsg.innerHTML = '';
    }
}
