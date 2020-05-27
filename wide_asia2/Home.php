<?php session_start(); ?>
<?php require_once('include/db_connection.php'); ?>
<?php 
	// checking if a user is logged in
	if (!isset($_SESSION['user_id'])) {
		header('Location: index.php');
	}
 ?>

<!DOCTYPE html>


<html>
<head>
<link class = "link" rel="shortcut icon" href="/images/wide-asia-logo67.ico"/>
<title>World wide experience</title>

<meta charset = "UTF-8">
<meta name = "description" content="Wide Asia Airline Home page">
<meta name = "keywords" content="Wide,Wide asia,Airlines">
<meta name = "author" content="H.S.D.N Gunasekara,IT17084796">
<meta name = "viewport" content="Width = device-width,initial-scale=1.0">
<script>
function Formvalid()
{
 
  var depd = document.getElementById("date");
  var arrd = document.getElementById("date1");
  var one = document.getElementById("one");
  var ret = document.getElementById("return");
  //document.getElementById("p").innerTEXT = depc;
  
  if(depd.value == 0)
  {
   alert("please select your depature date");
	  return false;
  }
  if(one.checked && arrd.value == 0 )
  {
      return true;
  
  }
  
  if(ret.checked && arrd.value == 0 )
  {
      alert("please select your return date");
	  return false;
  
  }
  
  if(one.checked || ret.checked)
 {
 
       return true;
 }
 else
 {
    alert("please enter");
	return false;
 }
 
 
}
</script>
<head>

</head>

<body>

<link rel= "stylesheet" type = text/css href = "js&css/first.css">
<link rel="stylesheet" href="css/hea.css">
	<link rel="stylesheet" href="css/user.css">


<header>	
	<div class="appname">Wide Asia</div>
	<div class="loggedin">Welcome <?php echo $_SESSION['first_name']; ?> <a href="logout.php">Log Out</a></div>
</header>





<div class = "header">

<img src = "images/jjjjj.png"></img>



<div class = "custom-select"  >

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select class = "select-selected">

 <option value="0">English(UK)</option>
<option value="1">English(US)</option>
<option value="2">中文</option>
<option value="3">한국어</option>
<option value="4">Deutsche</option>
<option value="5">français</option>
<option value="6">日本語</option>

</select>

</div>

<form class = "form1" class = "position">
  <div>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="search" id="mySearch" name="q" value= "search" >
	
    <button class = "button3">Search</button>
  </div>
</form>
<button class = "button"  onclick ="window.location.href= 'index.php'">Log in / Sign up</button>
</div>

<div class = "image">
<div class = "nav">

<form>
<input class = "input" type = "button" value = "BOOK" onclick ="window.location.href= 'book.html'"></input>&nbsp;&nbsp;&nbsp;
<input class = "input" type = "button" value = "Manage" onclick ="window.location.href= 'manage.html'"></input>&nbsp;&nbsp;&nbsp;
<input class = "input" type = "button" value = "Check-in" onclick ="window.location.href= 'checkin.html'"></input>&nbsp;&nbsp;&nbsp;
<input class = "input" type = "button" value = "Offers & promotions" onclick ="window.location.href= 'offerpromotion.html.html'"></input>&nbsp;&nbsp;&nbsp;
<input class = "input" type = "button" value = "Flight status" onclick ="window.location.href= 'flightstatus.html'"></input>&nbsp;&nbsp;&nbsp;
<input class = "input" type = "button" value = "Join with us" onclick ="window.location.href= 'join.html'"></input>

</form>


</div>

<br/><br/>
<div class = "other">
<br><br><br><br><br><br><br><br><br><h1>Plan your vacation with our greatest deals</h1>
<button class = "button1" onclick ="window.location.href= 'offerpromotion.html.html'" >Find Out more</button>
</div>
<div>







<div class = "form">

<div class = "rectangle"><label for = "book"><br><b>BOOK</label></div>
<div class = "container">

<form  name = "f" action = "booking.html" target = "_blank"  onsubmit = "return Formvalid()">

<div class="row">
      <div class="col-25" >
	  
	 <p id = "p"></p>
<div class = "rectangle1">
<label for = "origin"><br>Origin</label></div>
</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<select  id="country" name="country">
<option value = "0">Sri Lanka</option>
 <option value = "1">Australia</option>
 <option value = "2">Argentina</option>
 <option value = "3">South Korea</option>
 <option value = "4">America</option>
 <option value = "5">India</option>
 <option value = "6">China</option>
 <option value = "7">Japan</option>
 <option value = "8">South Africa</option><br>

 </select>
 
 </div>
 
 <br/><br/>
 <div class="row">
      <div class="col-25" >
<div class = "rectangle1"><label for = "destination"><br>Destination</label></div>
</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select  id="country1" name="country1" >
<option value = "1">South Korea</option>
 <option value = "2">China</option>
 <option value = "3">America</option>
 <option value = "4">India</option>
 <option value = "5">Argentina</option>
 <option value = "6">Japan</option>
 <option value = "7">china</option>
 <option value = "8">South Africa</option>
  <option value = "9">Sri Lanka</option>
 <br>
  </select>
  <p id = "p2"></p>

 </div>
 <br/>
 
 <div class="row">
      <div class="col-25" >
<div class = "rectangle1"><label for = "destination" ><br>Departure date</label></div>
</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input id = "date" class = "date" type = "date" >

</input>
<p id = "p3"></p>
 </div>
  <br/>
  
   <div class="row">
      <div class="col-25" >
<div class = "rectangle1"><label for = "destination"><br>Return date</label></div>
</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input id = "date1" class = "date" type = "date" ></input>

</input>
<p id = "p4"></p> 
 </div>
 <br/>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type = "radio" id = "one">One way</input>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type = "radio" id = "return">Return</input><br><br><br>

 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input class = "submit" type="submit" value="Search" onclick = "alert('Please wait')">
</div>
<br><br><br><br><br><br>
</form>





</div>
</body>



<div class = "ul">
<ul>
<a href = "#contact">Contact us</a><br/>
<a href = "faq.html">FAQ</a><br/>
<a href = "#contact">Help Center</a><br/>
<a href = "terms of use.html">Terms of use/</a>
<a href = "privacypolicy.html">Privacy Policy/</a>
<a href = "cookies.html">Cookies Policy</a>
</ul>
</div>
<div class = "connect">
<p ><h2><b>Connect with us</b></h2></p>
<a href ="#a"><img class = "icon" src = "images/8ca486faebd822ddf4baf00321b16df1-google-icon-logo-by-vexels.png"></a>
&nbsp;&nbsp;<a href ="#a"><img class = "icon" src = "images/Facebook-PNG-Image-13234.png"></a>
&nbsp;&nbsp;<a href ="#a"><img  class = "icon" src = "images/p98765ewrtyuiop.png"></a>
&nbsp;&nbsp;<a href ="#a"><img class = "icon" src = "images/07f0d7b69ef071571e4ada2f4d6a053a-instagram-icon-colorful-by-vexels.png"></a>
&nbsp;&nbsp;<a href ="#a"><img class = "icon" src = "images/linkedin.png"></a>

</div>

</div>


</html>