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
$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(! $link ){
  die('Could not connect: ' . mysqli_error());
}
echo 'Connected successfully';
echo '\n';
if(isset($_POST['submit'])){

  $sql = "insert into events values('$eventname','$name','$email','$contact','$venue','$date','$details')";
         if(mysqli_query($link, $sql)){
         echo "Values inserted successfully";
         } else {
            echo "Values not inserted ";
         }
}
mysqli_close($link);
?>



<?php
      $dbhost = 'localhost:8889';
      $dbuser = 'sam';
      $dbpass = '12345';
      $dbname = 'sam';
      $link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
      if(! $link ){
        die('Could not connect: ' . mysqli_error());
      }
      $result = mysqli_query($link,"SELECT * FROM events");
      echo "<table border='1'>
      <tr>
      <th>Event Name</th>
      <th>Name</th>
      <th>Email</th>
      <th>Contact</th>
      <th>Venue</th>
      <th>Date</th>
      <th>Details</th>
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
