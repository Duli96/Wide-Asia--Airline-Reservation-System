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
<link class = "link" rel="shortcut icon" href="wide-asia-logo67.ico"/>
<title>Check-in</title>

<meta charset = "UTF-8">
<meta name = "description" content="Wide Asia AirlineOnline Checkin success page">
<meta name = "keywords" content="Wide,Wide asia,Airlines">
<meta name = "author" content="H.S.D.N Gunasekara,IT17084796">
<meta name = "viewport" content="Width = device-width,initial-scale=1.0">
</head>


</body>

<link rel= "stylesheet" type = "text/css" href = "js&css/first.css">
<link rel="stylesheet" href="css/hea.css">

	<link rel="stylesheet" href="css/userpro.css">


<header>	
	<div class="appname">Wide Asia</div>
	<div class="loggedin">Welcome <?php echo $_SESSION['first_name']; ?> <a href="logout.php">Log Out</a></div>
</header>


<a href = "home.html"><img src = "images/jjjjj.png"></img></a>



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
<button class = "button"  onclick ="window.location.href= 'log.html'">Log in / Sign up</button>
</div>


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
<br><br>

<h1 align= "center"><font color = "#392EE8   ">Welcome <?php echo $_SESSION['first_name']; ?></font></h1>
<div class="imgcontainer">
<img src="images/user.png" alt="Avatar" class="avatar">
 </div>






</body>
<br><br><br><br>
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
<a href ="#a"><img class = "icon" src = "8ca486faebd822ddf4baf00321b16df1-google-icon-logo-by-vexels.png"></a>
&nbsp;&nbsp;<a href ="#a"><img class = "icon" src = "Facebook-PNG-Image-13234.png"></a>
&nbsp;&nbsp;<a href ="#a"><img  class = "icon" src = "p98765ewrtyuiop.png"></a>
&nbsp;&nbsp;<a href ="#a"><img class = "icon" src = "07f0d7b69ef071571e4ada2f4d6a053a-instagram-icon-colorful-by-vexels.png"></a>
&nbsp;&nbsp;<a href ="#a"><img class = "icon" src = "linkedin.png"></a>

</div>

</html>