function Formvalidation()
{
	var x = document.forms["new"]["title"].value;
	if(x == "")
	{
		alert("This field must be filled out");
		return false;
		
	}
	
	
}