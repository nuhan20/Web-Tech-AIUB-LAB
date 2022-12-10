<td>" . $row["address"]. "</td><?php
                                include 'conn.php';

                                // Check connection
                                if ($conn->connect_error) {
                                  die("Connection failed: " . $conn->connect_error);
                                } else {
                                  // insert start

                                  if (isset($_POST['submit'])) {
                                    $name = $_POST['name'];
                                    $address = $_POST['address'];
                                    $ages = $_POST['ages'];
                                    $gender = $_POST['gender'];
                                    $dob = $_POST['dob'];

                                    $sql = "INSERT INTO table1 (name, address , ages , gender, dob)
VALUES ('$name', '$address','$ages' , '$gender' , '$dob')";

                                    if ($conn->query($sql) === TRUE) {
                                      SESSION_start();
                                      $_SESSION['Message'] = "New record created successfully <br>";

                                      // select or read data start
                                      header("Location: index.php");
                                    } else {
                                      echo "Error: " . $sql . "<br>" . $conn->error;
                                    }
                                    // insert end



                                  }
                                  $conn->close();
                                }
