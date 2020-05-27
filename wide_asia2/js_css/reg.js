function Formvalidation()
{ var fname = document.getElementById("firstname")
	var email = document.getElementById("email");
	var pass = document.getElementById("password");
	var cpass = document.getElementById("cpassword");
	
	if(fname.value.length == 0)
	{
		//alert("aaa");
		document.getElementById("head").innerText = "*....All fields are mandatory......*"
		firstname.focus();         
		 return false;   
	}
	if(checkemail(email,"*Please enter an valid email"))
    {
		if(checkpassword(pass,"*Please enter valid password*"))
		{
			if(confirmpassword(cpass,pass,"*Password didn`t match*"))
			{
				
				
				return true;
				
			}	
		}		
	}
	
	return false;
	
	
}


function checkemail(inputtext,alertMsg)
{
	 var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/; 
	if(inputtext.value.match(emailExp))
	{
		return true;
		
	}
	
	else
	{
		document.getElementById("p1").innerText = alertMsg;
		inputtext.focus();
		return false
		
	}
}


function checkpassword(inputtext,alertMsg)
{
var passExp = /^[a-zA-Z0-9]+$/; 
	
	if(inputtext.value.match(passExp))
	{
		
		return true;
	}
	
	else
	{
		
		document.getElementById("p2").innerText = alertMsg;
		inputtext.focus();
		return false;
	}
}

function confirmpassword(inputtext,inputtext1,alertMsg)
{
      var cpassExp = inputtext1;
	if(inputtext.value.match(cpassExp))
	{
		
		return true;
	}
	
	else
	{
		document.getElementById("p3").innerText = alertMsg;
		inputtext.focus();
		return false;
		
	}
}