function Validcheck()
{
	var title = document.getElementById("tit");
	

	var gen1 = document.getElementById("gender1");
	var gen2 = document.getElementById("gender2");
	
	var no = document.getElementById("phone");
	var mail = document.getElementById("email");
	
	
	
     
	if(title.value.length == 0)
	{
		alert("Please fill all the mandatory fieds");
		    
		 return false;   
	}
	if(checkgender(gen1,gen2,"Please select your gender"))
    {
		if(checknumber(no,"*Please enter valid phone number"))
		{
			if(checkemail(mail,"*Please enter valid email*"))
			{
				
				
				return true;
				
			}	
		}		
	}
	
	return false;
	
	
}


function checkgender(inputtext,inputtext1,alertMsg)
{
	
	if(inputtext.checked || inputtext1.checked)
	{
		return true;
		
	}
	
	else
	{
		 alert(alertMsg);
		return false
		
	}
}


function checknumber(inputtext,alertMsg)
{
var passExp =/^\d{10}$/;
	
	if(inputtext.value.match(passExp))
	{
		
		return true;
	}
	
	else
	{
		alert(alertMsg);
		return false;
	}
}

function checkemail(inputtext,alertMsg)
{
      var cpassExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/; 
	if(inputtext.value.match(cpassExp))
	{
		
		return true;
	}
	
	else
	{
		alert(alertMsg);
		return false;
		
	}
}