<!DOCTYPE HTML>
<html>
<head>
<title>Event Promotion</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="/../css/responsiveform.css">
<link rel="stylesheet" media="screen and (max-width: 1200px) and (min-width: 601px)" href="/../css/responsiveform1.css" />
<link rel="stylesheet" media="screen and (max-width: 600px) and (min-width: 351px)" href="/../css/responsiveform2.css" />
<link rel="stylesheet" media="screen and (max-width: 350px)" href="/../css/responsiveform3.css" />

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

    <div id="envelope">
    <header>
        <h2>List your event here!</h2>
        <p>Fill out the details and wait for us to verify it.</p>
    </header>
    <hr>
    <form action="" method="post">
      <label>Event Name </label>
    	<input type="text" name="event_name" placeholder="For Eg. Garrix Live" width="100px;">
    	<label>Your Name </label>
    	<input type="text" name="name" placeholder="For Eg. John Doe" width="100px;">
    	<label>Email Id </label>
    	<input type="text" name="email" placeholder="yourname@gmail.com">
    	<label>  Contact Number </label>
    	<input type="text" name="contact" placeholder="9876543210">
    	<label>  Eveny location </label>
    	<input type="text" name="venue" placeholder="Eg. 123 Cafe, Bandra">
    	<label>  Event Date </label>
      <input type="date" name="date">
    	<label>  Event Details </label>
    	<textarea name="event_details" rows="10" cols="15" placeholder="Tell us about your event!"></textarea>
    	<input type="submit" value="Send Message" name="submit">
    </form>
    </div>

    <?php
    $eventname = $_POST['event_name'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $venue = $_POST['venue'];
    $date = $_POST['date'];
    $details = $_POST['event_details'];

    $dbhost = 'localhost:8889';
    $dbuser = 'sam';
    $dbpass = '12345';
    $dbname = 'sam';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if(! $conn ){
      die('Could not connect: ' . mysqli_error());
    }
    if(isset($_POST['submit'])){

      $sql = "insert into events values('$eventname','$name','$email','$contact','$venue','$date','$details')";
             if(mysqli_query($conn, $sql)){
            echo "<h2>Values inserted successfully</h2>";
             } else {
               echo "<h2>Values not inserted</h2>";
             }
    }
    mysqli_close($conn);
    ?>


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
			   <p>© 2018 by Sam, Esha, Harsh</p>
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
