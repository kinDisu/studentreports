<?php


array_map("htmlspecialchars", $_POST);




include_once("connection.php");
$stmt = $conn->prepare("INSERT INTO Tblsubjects (Subjectname,Teacher)VALUES (null,:Subjectname,:Teacher,)");

$stmt->bindParam(':Subjectname', $_POST["Subjectname"]);
$stmt->bindParam(':Teacher', $_POST["Teacher"]);
$stmt->bindParam(':role', $role);
$stmt->execute();
$conn=null;


?>