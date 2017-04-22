<?php
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "info";
					// Create connection

					$conn = new mysqli($servername, $username, $password, $dbname);

					// Check connection
					if ($conn->connect_error) {
   			 		die("Connection failed: " . $conn->connect_error);
					}
					//echo "<br>Connected successfully<br>";

					if(isset($_POST['submit'])){

					$nm = $_POST['name'];
					$cl = $_POST['class'];
					$dpt = $_POST['dept'];
					$em = $_POST['email'];
					$contact = $_POST['phone'];
					$id = $_POST['tele'];
					$gen = $_POST['gender'];


					$sql = "INSERT INTO inform VALUES('$nm', '$cl', '$dpt' , '$em' , '$contact' , '$id' , '$gen')";

					if ($conn->query($sql) === TRUE) {
					   echo "successfully Registered.";
					} else {
					    echo "Error: " . $sql . "<br>" . $conn->error;
					    echo "Please fill all the details.";
					}

					$conn->close();

					}
				?>