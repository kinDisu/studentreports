<!DOCTYPE html>
<html>
<head>
    
    <title>Page title</title>
    
</head>
<body>

<form action="addsubjects.php" method="post">
  Subjectname:<input type="text" name="subject">
  Teacher:<input type="text" name="teach"><br>
</form>

<?php
// Include the 'connection.php' file, which presumably contains the database connection logic
include_once('connection.php');

// Prepare a SQL statement to select all columns from the 'TbLsubjects' table
$stmt = $conn->prepare("SELECT * FROM Tblsubjects");

// Execute the prepared statement
$stmt->execute();

// Fetch each row from the result set using associative array indexing
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
  // Output the values of the 'Forename', 'Surname', and 'House' columns for each row
  echo($row["Teacher"].'"<br>"'.$row["Subjectname"]."<br>".);
}

?>

</body>
</html>

