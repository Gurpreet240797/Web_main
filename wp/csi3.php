<?php
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "workshop";
					// Create connection

					$conn = new mysqli($servername, $username, $password, $dbname);

					// Check connection
					if ($conn->connect_error) {
   			 		die("Connection failed: " . $conn->connect_error);
					}
					//echo "<br>Connected successfully<br>";

					if(isset($_POST['submit'])){

					$dt = $_POST['date'];
					$tm = $_POST['time'];
					$sp = $_POST['speaker'];
					$hr = $_POST['hrs'];
					$am = $_POST['amount'];
					$am1 = $_POST['amount1'];

					$sql = "INSERT INTO detail VALUES('$dt', '$tm', '$sp' , '$hr' , '$am' , '$am1')";

					if ($conn->query($sql) === TRUE) {
					   echo "successfully Registered.";
					} else {
					    echo "Error: " . $sql . "<br>" . $conn->error;
					    echo "Please fill all the details.";
					}

					$conn->close();

					}
				?>