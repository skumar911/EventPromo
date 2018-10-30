<?php
require_once "config.php";

// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Event Promotion</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/bootstrap.css">
<style type="text/css">
    body{ font: 14px sans-serif; text-align: center; }
    table,td{
      margin-left: -120px;
      width: 800px;
      height: auto;
      text-align: center;
      border-style:solid;
      border-width:2px;
      border-color:#333333;
    }
    th{
      width: 800px;
      height: auto;
      background-color: #333333;
      color: white;
      text-align: center;
      border-style:solid;
      border-width:2px;
      border-color:#333333;
    }
</style>
</head>
<body>
 <div class="header-top">
	<div class="wrap">
        <div class="logo">
			<a href="index.html"><img src="images/logo.png" alt="Event Details and Promotion" width="100" height="100"/></a>
		</div>
		<div class="cssmenu">
		  <nav id="nav" role="navigation">
			<a href="#nav" title="Show navigation">Show navigation</a>
			<a href="#" title="Hide navigation">Hide navigation</a>
			<ul class="clearfix">
				<li class="active"><a href="index.html">Home</a></li>
				<li><a href="news.html"><span>News</span></a></li>
				<li><a href="events.html"><span>Events</span></a></li>
				<li><a href="bookings.html">Bookings</a></li>

				<div class="clear"></div>
			</ul>
		    </nav>
		  </div>
		  <div class="buttons">
				<div class="login_btn">
					<a href="login.php">Login / Signup</a>
				</div>
				<div class="get_btn">
					<a href="listed.php">Get Listed Today</a>
				</div>
				<div class="clear"></div>
		   </div>
	     <div class="clear"></div>
		<h2 class="head">Find the <span class="m_1">next event </span>you want <span class="m_1">to attend</span></h2>
     </div>
    </div>
  <div class="main">
     <div class="wrap">
      	 <div class="section group">
				<div class="cont span_2_of_blog">
          <div class="page-header">
              <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>! Admin Console</h1>
          </div>
          <p>
              <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
              <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
          </p>
          <?php
                $result = mysqli_query($link,"SELECT * FROM events");
                echo "<table border='1'>
                <tr>
                <th><b>Event Name</b></th>
                <th><b>Name</b></th>
                <th><b>Email</b></th>
                <th><b>Contact</b></th>
                <th><b>Venue</b></th>
                <th><b>Date</b></th>
                <th><b>Details</b></th>
                </tr>";

                while($row = mysqli_fetch_array($result))
                {
                echo "<tr>";
                echo "<td>" . $row['event_name'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['contact'] . "</td>";
                echo "<td>" . $row['venue'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "<td>" . $row['details'] . "</td>";
                echo "</tr>";
                }
                echo "</table>";
                mysqli_close($link);
           ?>
			</div>
			</div>
		  <div class="bsidebar span_1_of_blog">
					<h2 class="head4">Search</h2>
					<div class="search">
						<form>
							<input type="text" value="Search...." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
							<input type="submit" value="">
						</form>
					</div>
					<h2 class="head4">Categories</h2>
			        <ul class="list1">
					    <li><a href="#">Comedy</a></li>
			            <li><a href="#">Trekking</a></li>
			            <li><a href="#">Music</a></li>
			            <li><a href="#">Dancing</a></li>
			            <li><a href="#">Live Show</a></li>
			            <li><a href="#">Sports</a></li>
		            </ul>
	        <h2 class="head4">Tags</h2>
	        <ul class="tags">
				<li><a href="#">Events</a></li>
				<li><a href="#">Gallery</a></li>
				<li><a href="#">Videos</a></li>
				<li><a href="#">Albums</a></li>
				<li><a href="#">Solo Artists</a></li>
				<li><a href="#">Audio Post</a></li>
				<li><a href="#">Musical</a></li>
				<li><a href="#">Live</a></li>
				<li><a href="#">Concert</a></li>
			    <li><a href="#">Movie</a></li>
			 </ul>
	     </div>
	   </div>
	   <div class="clear"></div>
	  </div>
   </div>
   <div class="footer">
    <div class="wrap">
      <div class="footer-menu">
      <ul>
      <li class="active"><a href="index.html">Home</a></li>
      <li><a href="artists.html">Artists</a></li>
      <li><a href="bookings.html">Bookings</a></li>
      <div class="clear"></div>
    </ul>
      </div>
      <div class="footer-bottom">
        <div class="copy">
       <p>© 2018 by Samdharsi, Esha, Harsh</p>
      </div>
      <div class="social">
       <ul>
        <li class="facebook"><a href="#"><span> </span></a></li>
        <li class="twitter"><a href="#"><span> </span></a></li>
        <li class="linked"><a href="#"><span> </span></a></li>
       </ul>
      </div>
      <div class="clear"></div>
      </div>
     </div>
   </div>
 </body>
 </html>
