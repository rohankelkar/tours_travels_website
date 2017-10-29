<?php
$con=mysqli_connect("localhost","root","","ihd");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM review where star > 3");

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Rating</th>
<th>Experience</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['fname'] . "</td>";
  echo "<td>" . $row['lname'] . "</td>";
  echo "<td>" . $row['star'] . "</td>";
  echo "<td>" . $row['exp'] . "</td>";
  echo "</tr>";
}

echo "</table>";

mysqli_close($con);
?>