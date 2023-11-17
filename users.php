<!DOCTYPE html>
<html>
<head>
    
    <title>Page title</title>
    
</head>
<body>

<form action="addusers.php" method="post">
  First name:<input type="text" name="forename"><br>
  Last name:<input type="text" name="surname"><br>
  Password:<input type="password" name="passwd"><br>
  House:<input type="text" name="house"><br>
  Year:<input type="text" name="year"><br>
  <!--Creates a drop down list-->
  Gender:<select name="gender">
		<option value="M">Male</option>
		<option value="F">Female</option>
	</select>
  <br>
  <!--Next 3 lines create a radio button which we can use to select the user role-->
  <input type="radio" name="role" value="Pupil" checked> Pupil<br>
  <input type="radio" name="role" value="Teacher"> Teacher<br>
  <input type="radio" name="role" value="Admin"> Admin<br>
  <input type="submit" value="Add User">
</form>

<?php
// Include the 'connection.php' file, which presumably contains the database connection logic
include_once('connection.php');

// Prepare a SQL statement to select all columns from the 'TblUsers' table
$stmt = $conn->prepare("SELECT * FROM TblUsers");

// Execute the prepared statement
$stmt->execute();

// Fetch each row from the result set using associative array indexing
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
  // Output the values of the 'Forename', 'Surname', and 'House' columns for each row
  echo($row["Forename"].' '.$row["Surname"]."<br>".$row["House"]."<br>");
}

?>

</body>
</html>
