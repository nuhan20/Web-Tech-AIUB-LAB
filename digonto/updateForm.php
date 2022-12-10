<!DOCTYPE html>
<html>

<head>

  <title></title>
  <style>
    table,
    th,
    td {
      border: 1px solid;
      text-align: center;
    }

    table {
      width: 100%;
    }
  </style>
</head>

<body>
  <a href="insertForm.php">Add Data</a> </br></br>
  <a href="updateForm.php">Update Data</a> </br></br>
  <form name="Update" method="post" action="update.php">
    Id: <input type="number" name="uid"><br><br>
    Name: <input type="text" name="uname"><br><br>
    Name: <input type="text" name="address"><br><br>
    Name: <input type="number" name="ages"><br><br>
    Name: <input type="text" name="gender"><br><br>
    Name: <input type="text" name="dob"><br><br>
    <input type="submit" name="submitDelete" value="Update">
  </form>



  <?php
  include 'conn.php';
  // select or read data start
  $sql = "SELECT id, name, address, ages, gender, dob FROM table1";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    echo "<table><tr> <th>ID</th> <th>Name</th> <th>Address</th> <th>ages</th> <th>gender</th> <th>dob</th></tr>";
    // output data of each row
    while ($row = $result->fetch_assoc()) {
      echo "<tr > 
        <td>" . $row["id"] . "</td> 
         <td>" . $row["name"] . "</td>
         <td>" . $row["address"] . "</td>
         <td>" . $row["ages"] . "</td>
         <td>" . $row["gender"] . "</td>
         <td>" . $row["dob"] . "</td>


        </tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }

  ?>
</body>

</html>