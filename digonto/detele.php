<?php
include 'conn.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $uid = $_POST["uid"];
// sql to delete a record
$sql = "DELETE FROM table1 WHERE id= $uid";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header("Location: index.php");

} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
  

}

?>