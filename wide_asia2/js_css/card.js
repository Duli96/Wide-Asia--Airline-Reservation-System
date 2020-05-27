function valid()
{
	var num = document.getElementById("card");
	var month = document.getElementById("month");
	var yr = document.getElementById("year");
	var CVV = document.getElementById("csc");
	
	if(num.value.length == 0)
	{
		alert("All fields are mandatory");
		return false;
		
	}
	
	if(checknumber(num,"*Please enter an valid card number"))
    {
		
			if(checkyear(yr,"*Please enter valid year"))
			{
				if(checkmonth(month,"Please enter valid month"))
				{
				if(checkcvv(cvv,"*Please enter an valid CVV"))
				{
				return true;
				
				}
				
				}
			}	
				
	}
	
	return false;
	
	
}


function checknumber(inputtext,alertMsg)
{
	 var AmericaanExp = /^(?:3[47][0-9]{13})$/; 
	 var visaExp = /^(?:4[0-9]{12}(?:[0-9]{3})?)$/;
	 var masterExp = /^(?:5[1-5][0-9]{14})$/;
	if(inputtext.value.match(AmericaanExp) || inputtext.value.match(visaExp) || inputtext.value.match(masterExp))
	{
		return true;
		
	}
	
	else
	{ alert(alertMsg);
		//document.getElementById("p1").innerText = alertMsg;
		inputtext.focus();
		return false
		
	}
}




function checkyear(inputtext,alertMsg)
{
      
	if(inputtext.value > 2018)
	{
		
		return true;
	}
	
	else
	{
		alert(alertMsg);
		document.getElementById("p3").innerText = alertMsg;
		inputtext.focus();
		return false;
		
	}
}

function checkmonth(inputtext,alertMsg)
{
    
	if(inputtext.value > 1 &&  inputtext.value < 12 )
	{
		
		return true;
	}
	
	else
	{
		alert(alertMsg);
		document.getElementById("p3").innerText = alertMsg;
		inputtext.focus();
		return false;
		
	}
}

function checkCVV(inputtext,alertMsg)
{
      var  cExp = /^[0-9]{3,4}$/;
	if(inputtext.value.match(cExp))
	{
		
		return true;
	}
	
	else
	{
		alert("aa");
		document.getElementById("p3").innerText = alertMsg;
		inputtext.focus();
		return false;
		
	}
}