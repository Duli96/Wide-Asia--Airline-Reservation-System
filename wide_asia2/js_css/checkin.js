function checkin()
{
	
	var num = document.getElementById("check").value;
	var numExp = /^WA\d{4}$/;
	
	if(num.length == 0)
	{
		alert("Please enter your booking reference number and last name for check-in.");
		return false;
	}
	if(num.match(numExp))
	{
		return true;
		
	}
	else{
		
		alert("Enter valid booking reference number.(Ex:- WA1234)");
		return false;
	}
	
	
}
function checkemail()
{
	
	var mail = document.getElementById("email").value;
	var mailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/; 
	
	
	if(mail.match(mailExp))
	{
		return true;
		
	}
	
	
	else
	{   alert("Enter valid E mail address");
		return false;
		
	}
}