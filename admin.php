<?php
	//include 'x.php';
	//session is started.
	//session_set_cookie_params(0);
	/*session_start();
	if(!isset($_SESSION['logged-in']) || $_SESSION['logged-in'] != true) {
			header('Location:x.php');
			exit;
	}*/
	session_start();
	if($_SESSION['logged-in']!=true)
		header('Location:error.php');
	?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome To Admin's Den</title>
<link rel="stylesheet" type="text/css" href="header.css"  />
<link rel="stylesheet" type="text/css" href="heading.css" />
<link rel="stylesheet" type="text/css" href="body.css"  />
<link rel="stylesheet" type="text/css" href="background.css" />
<link rel="stylesheet" type="text/css" href="navigation.css" />
<style type="text/css">
.sidebar1 {
	float: left;
	width: 20%;
	background-color:#172322;
	padding-bottom: 10px;
	margin-top:30px;
	margin-right:40px;
}
.middle {
	float: left;
	width: 50%;
	background-colo:#172322;
	padding-bottom: 10px;
	margin-left:100px;
	text-align:center;
	margin-top:5px;
	size:500px 500px;
	border:double;
	border-top-right-radius:10px;
	border-bottom-left-radius:10px;
	border-bottom-right-radius:10px;
	border-top-left-radius:10px;
}
ul.nav {
	list-style: none; /* this removes the list marker */
	/*border-top: 1px solid #666; /* this creates the top border for the links - all others are placed using a bottom border on the LI */
	margin-bottom: 15px; /* this creates the space between the navigation on the content below */
}
ul.nav li {
	border-bottom: 1px solid #666; /* this creates the button separation */
}
ul.nav a, ul.nav a:visited { /* grouping these selectors makes sure that your links retain their button look even after being visited */
	padding: 5px 5px 5px 15px;
	display: block; /* this gives the link block properties causing it to fill the whole LI containing it. This causes the entire area to react to a mouse click. */
	text-decoration: none;
	background-color: #172322;
	color: #FFF;
}
ul.nav a:hover, ul.nav a:active, ul.nav a:focus { /* this changes the background and text color for both mouse and keyboard navigators */
	background-color: #6F7D94;
	color: #FFF;
}

</style>
</head>

<body class="body">
<div>
<div class="heading"><h1> INDIAN INSTITUTE OF TECHNOLOGY, PATNA</h1></div>
<h2 class="header" style="color:#00F; text-decoration:blink;">Central Library Portal</h2>
<h3 style="color:#00F; text-decoration:blink; margin-left:250px; margin-right:150px"><marquee><img src="ET10_Live_icon.png" /> 24x7 Online Library Portal</marquee></h3>
<br />
<hr />
<ul id="menu"> 
    <li><a href="admin.php">Home</a></li>
<li><a href="E-Journals.html">E-Journals</a></li>
<li><a href="E-books.html">E-books</a></li> 
<li><a href="vendor.html">Vendors</a></li> 
<li><a href="List of E-Resources_Web Page.pdf" target="new">List of E-Resources</a></li> 
<li><a href="contact.html">Contact Us</a></li>  
 <li><a href="search.php">Search Books</a></li>  

</ul>
</div>
<div class="background">
<p style="text-decoration:blink;color:#00F"> Welcome !!! Admin</p><a href="logout.php" style="text-decoration: underline;">Logout</a>
<div class="sidebar1">
  <ul class="nav">
    <li style="color:#CCB647;"<strong>Catalouging</strong><ul>
    				    <li><a href="title.php">Enter Title</a></li>
                        <li><a href="remove.php">Remove</a></li>
                        <li><a href="request.php">Place Order Request</a></li>
                        <li><a href="set_var.php">Set Variables</a></li>
    </ul></li>
      <li style="color:#CCB647;"><strong>Circulation</strong><ul>
      					<li><a href="issue.php">Issue Book</a></li>
                        <li><a href="return.php">Return Book</a></li>
                        <li><a href="member.php">Member Record</a></li>
                        <li><a href="register.php">Registration</a></li>
                        <li><a href="cancel.php">Cancellation</a></li>
    </ul></li>
    </ul>
</div>
<br /><br /><br />
<div class="middle" id="frm" style="color:#600;">
<h2 style="color:#F00; text-decoration:underline;"><strong>Select the option you want to perform</strong></h2>
<table align="center" cellspacing="10px">
<tr>
<td>Home</td>
<td>Enter Title</td>
<td>Block Membership</td>
<td>Cancellation</td>
</tr>
<tr>
<td><a href="admin.php"><img src="download.jpg" width="100px" height="100px" style="float:inherit"/></a></td>
<td><a href="title.php"><img src="openiconlibrary.jpg" width="100px" height="100px" style="float:inherit"/></a></td>
<td><a href="block.php"><img src="images (4).jpg" width="100px" height="100px" style="float:inherit;"/></a></td>
<td><a href="cancel.php"><img src="download (1).jpg" width="100px" height="100px" style="float:inherit;" /></a></td>
</tr>
<tr>
</tr>
<tr>
<td>Issue Book</td>
<td>Return Book</td>
<td>Remove Book</td>
<td>Member Registration</td>
</tr>
<tr>
<td><a href="issue.php"><img src="images (7).jpg" width="100px" height="100px" style="float:inherit;" /></a></td>
<td><a href="return.php"><img src="images (8).jpg" width="100px" height="100px" style="float:inherit;" /></a></td>
<td><a href="remove.php"><img src="download (2).jpg" width="100px" height="100px" style="float:inherit;" /></a></td>
<td><a href="register.php"><img src="images (6).jpg" width="100px" height="100px" style="float:inherit;" /></a></td>
</tr>
</table>
</div>
<br><br /><br /><br /><br /><br><br /><br /><br /><br />
<div id="footer">
<footer> Copyright &copy; Indian Institute of Technology Patna<br>Website designed by Library Management Team</footer>
</div>
</div>
<!--<script>
	function enter_title(field) {
		var ds=document.getElementById(field);
		ds.style.display = 'block';	
	}
</script>
-->
</body>
</html>
