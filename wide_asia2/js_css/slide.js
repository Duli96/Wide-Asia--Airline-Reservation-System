var index = 0;
Slideshow();

function Slideshow()
{
	  var i;
	  var x = getElementByClassName("slideshow");
	  
	  for(i=0;i<x.length;++i)
	  {
		  x[i].style.display = "none";
		  
	  }
	 
	     index++;
		 
		 if(index > x.length)
         {  index = 1 }

         x[index-1].style.display = "block";
        
         setTimeout(Slideshow,2000);		
	
	
	
	
}