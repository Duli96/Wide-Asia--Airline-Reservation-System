function checkflight()
{
	var num = document.getElementById("status").value;
	var numExp = /^BL\d{4}$/;
	if(num.length == 0)
	{
		alert("Please enter FLIGHT NUMBER and DEPARTURE DATE");
		return false;
	}
	if(num.match(numExp))
	{
		return true;
		
	}
	else{
		
		alert("Enter valid flight number(Ex:-BL1234)");
		return false;
	}
	
	
}