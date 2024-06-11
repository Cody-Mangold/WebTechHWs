// JavaScript Document
//var elMsg = document.getElementById('usernamefeedback');     

var elUsername = document.getElementById('username');
var elPassword = document.getElementById('password'); 
var elEmail = document.getElementById('email'); 
var elFname = document.getElementById('firstname');
var elLname = document.getElementById('lastname');
var elComments = document.getElementById('comments');
var elPhone = document.getElementById('phone');


function checkData(minLength,inputID,feedback,glyphiconID) 

{       
		var el = document.getElementById(inputID);
		var elMsg = document.getElementById(feedback);
		var glyph = document.getElementById(glyphiconID);

		if (el.value.length < minLength) 
		{                   
		elMsg.innerHTML = inputID.toUpperCase()+' must be '+minLength+' characters or more'; 
	
			
		el.parentNode.classList.add("has-error");
        el.parentNode.classList.remove("has-success");
		glyph.classList.add("glyphicon-remove");
        glyph.classList.remove("glyphicon-ok");
			
		} 
	
		else 
		{                                              
		elMsg.innerHTML = inputID.toUpperCase()+ ' is valid!'; 
		el.parentNode.classList.add("has-success");
		el.parentNode.classList.remove("has-error");
		glyph.classList.add("glyphicon-ok");
        glyph.classList.remove("glyphicon-remove");
		}
	
	

}

function checkNames(inputID,feedback,glyphiconID) 

{       
		var el = document.getElementById(inputID);
		var elMsg = document.getElementById(feedback);
		var validRegex = /^[a-zA-Z'-]{2,}$/;
		var glyph = document.getElementById(glyphiconID);

		if (el.value.match(validRegex)) 
		{                   
		elMsg.innerHTML = inputID.toUpperCase()+' is valid!'; 
	
			
		el.parentNode.classList.add("has-success");
		el.parentNode.classList.remove("has-error");
		glyph.classList.add("glyphicon-ok");
        glyph.classList.remove("glyphicon-remove");
		} 
	
		else 
		{                                              
		elMsg.innerHTML = inputID.toUpperCase()+ ' is not valid!'; 
			el.parentNode.classList.add("has-error");
        el.parentNode.classList.remove("has-success");
			glyph.classList.add("glyphicon-remove");
        glyph.classList.remove("glyphicon-ok");
			
		
			
		}

}
function checkPhone(inputID,feedback, glyphiconID) 

{       
		var el = document.getElementById(inputID);
		var elMsg = document.getElementById(feedback);
		var validRegex = /^[0-9]{10}$/;
			var glyph = document.getElementById(glyphiconID);


		if (el.value.match(validRegex)) 
		{                   
		elMsg.innerHTML = ' Phone Number is valid!'; 
	
			
		el.parentNode.classList.add("has-success");
		el.parentNode.classList.remove("has-error");
			glyph.classList.add("glyphicon-ok");
        glyph.classList.remove("glyphicon-remove");
		} 
	
		else 
		{                                              
		elMsg.innerHTML = 'Phone Number is not valid!'; 
			el.parentNode.classList.add("has-error");
        el.parentNode.classList.remove("has-success");
			glyph.classList.add("glyphicon-remove");
        glyph.classList.remove("glyphicon-ok");
			
		
			
		}

}

function validateEmail(email, feedback, glyphiconID)
{
	var varEmail = document.getElementById(email);
	var emailMsg = document.getElementById(feedback);
	var glyph = document.getElementById(glyphiconID);

	
	var validRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	
	if(varEmail.value.match(validRegex))
		{
			
		emailMsg.innerHTML = 'Email is Valid'; 
		varEmail.parentNode.classList.add("has-success");
		varEmail.parentNode.classList.remove("has-error");
			glyph.classList.add("glyphicon-ok");
        glyph.classList.remove("glyphicon-remove");

		}
	else
	{
		emailMsg.innerHTML = 'Email is not Valid'; 
		varEmail.parentNode.classList.add("has-error");
        varEmail.parentNode.classList.remove("has-success");
			glyph.classList.add("glyphicon-remove");
        glyph.classList.remove("glyphicon-ok");
		
	}
}

function validateComments(inputID, feedback,glyphiconID)
{
	var el = document.getElementById(inputID);
	var elMsg = document.getElementById(feedback);
	var glyph = document.getElementById(glyphiconID);

	
	if(el.value.trim() === '')
		{
			
		elMsg.innerHTML = 'Comments cannot be empty'; 
		el.parentNode.classList.add("has-error");
        el.parentNode.classList.remove("has-success");
			glyph.classList.add("glyphicon-remove");
        glyph.classList.remove("glyphicon-ok");
		}
	else
	{
		elMsg.innerHTML = 'Comments are Valid!'; 
		el.parentNode.classList.add("has-success");
		el.parentNode.classList.remove("has-error");
			glyph.classList.add("glyphicon-ok");
        glyph.classList.remove("glyphicon-remove");
		
	}
}




elUsername.addEventListener('blur', function() 
	{ checkData(6,'username','usernamefeedback','userStatus');
	},false);


elPassword.addEventListener('blur', function() {

checkData(6, 'password', 'passwordfeedback','passStatus');

},false);

elEmail.addEventListener('blur', function() {

validateEmail('email','emailfeedback','emailStatus');

},false);

elFname.addEventListener('blur', function() {

checkNames('firstname','fNamefeedback','fNameStatus');

},false);

elLname.addEventListener('blur', function() {

checkNames('lastname','lNamefeedback','lNameStatus');

},false);

elPhone.addEventListener('blur', function() {

checkPhone('phone','phonefeedback','phoneStatus');

},false);

elComments.addEventListener('blur', function() {

validateComments('comments','Commentsfeedback','commentsStatus');

},false);
