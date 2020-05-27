function manage()
{ var num = document.getElementById("m").value;
  var numExp = /^WA\d{4}$/;
  
  if(num.match(numExp))
  {
	  return true;
	  
  }
	else{
		
		alert("Enter valid reference number");
		return false;
	}
	
	
}

function cancel()
{ var num = document.getElementById("c").value;
  var numExp = /^WA\d{4}$/;
  if(num.length == 0)
	{
		alert("Please enter BOOKING REFERENCE NUMBER");
		return false;
	}
  if(num.match(numExp))
  {
	  return true;
	  
  }
	else{
		
		alert("Enter valid reference number(Ex:-WA1234)");
		return false;
	}
	
	
}