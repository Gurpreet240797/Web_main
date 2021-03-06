<!DOCTYPE HTML>
<html>
	<head lang="en-US">
		<title></title>
		<link rel="icon" href="https://upload.wikimedia.org/wikipedia/en/9/97/DBIT_logo.png" type="image/png"></link>

		<script src="main.js"></script>

		<style>
			ul{
				list-style-type: none;
				margin: 2;
				padding: 2;
				overflow: hidden;
				background-color:#e67e22;
				background: #e67e22;
			}
			li{
				float: left;
			}
			li a{
				display: block ;
				color: white;
				text-align: right;
				padding: 10px;
				text-decoration:none;
			}
			li a:hover{
				background-color:#1abc9c;
				text-decoration:none;
			}
			li a.active{
				background-color:grey;
			}
			blockquote{
				margin-left:20%;
				margin-right:20%;
		    	padding: 5px;
			    background-color:#FFF8DC;
		    	border-left: 2px solid black;
			}
			th{
				text-align:right;
			}

			td{
				text-align:left;
			}

			fieldset{
				margin-left: 25%;
				margin-right:25%;
				display: block;
				width: 50%;
			}
			input,select,button{
				padding: 5px 8px;
				margin: 4px 0;
				display: inline-block;
				border: 1px solid #ccc;
				border-radius: 3px;
				box-sizing: border-box;
			}
	
			input[type=text,email,password,date]{
				width:80%;
			}

			input[type=submit] {
				background-color: #e67e22;
				color: white;
				padding: 5px 8px;
				margin: 4px 0;
				border: none;
				border-radius: 3px;
				cursor: pointer;
			}
			
			input[type=submit]{
				background-color:#e67e22;
			}

			input[type=submit]:hover {
				background-color:#1abc9c;
			}

			
			legend{
				color:#e67e22;
			}
		</style>

		
	</head>
	
	<body>
		<header style="background-color:#e67e22;">
			<table align="center">
			<tr>
			<td><img src="http://www.dbclmumbai.org/images/DBIT_logoPNG.png" weight="80" height="80" align="left"></td>
			<td><h2 align="center">DON BOSCO INSTITUTE OF TECHNOLOGY<br><center>CSI<center></h2></td>
			<td><img src="https://placementtalks.files.wordpress.com/2015/02/csi-logo.png" weight="80" height="80" align="right"></td>
			</tr>
			</table>
		</header>

		<hr>
	
				<h2 align="center" >CSI Registration Form</h2>
				
				<ul id="gp" align="center">
					<li><a href="https://moodle.dbit.in/login/index.php">Home</a></li>
					<li><a href="speaker.html">Speaker</a></li>
					<li><a href="workshop.html">Workshop</a></li>
					<li><a href="http://www.dbit.in/index.php/organizations/csi">About Us</a></li>
					<li><a href="#">Search</a></li>
					<li><a href="http://www.dbit.in/index.php/contact-us">Contact Us</a></li>
				</ul>
				<br>
				<br>
				<br>
				<center>
				<blockquote>
					<h2 align="center">Registration For <input type="text" name="csi" id="topic" value="Github" readonly></input><br></h2>	
				</blockquote>
				</center>
				<br>
			
				<form name="hello" method="POST" action="csi.php" onsubmit="return myFunction()">

					<fieldset>
					<legend align="center">Workshop Details</legend>
					
					<table align="center">
						<tr>
						<th>Date</th>
						<td>:</td>
						<td><input type="text" name="date" id="date" value="12-04-2017" readonly></td>
						</tr>
						
						<tr>						
						<th>Time</th>
						<td>:</td>
						<td><input type="time" name="time" id="time" value="11:00" readonly></td>
						</tr>
						<tr>
						<th>Speaker</th>
						<td>:</td>
						<td><input type="text" name="speaker" id="speaker" value="Gurpreet Singh" readonly></td>
						<tr>
						<th>Number Of Hours</th>
						<td>:</td>
						<td><input type="number" name="hrs" id="hrs" value="2" readonly></td>
						</tr>
					</table>
					</fieldset
				
				<br>
					<br>
					<fieldset>
					<legend align="center">Personal Information</legend>				
					<blockquote align="center">
						<h2><span style="color:#9999;"><strong><span">Enter the following details</span></strong></	span></h2>
					</blockquote>
				
					<table align="center">
						<tr>
						<th>Name</th>
						<td>:</td>
						<td><input type="text" name="name" id="name"></td>
						<td><p name="comment" id="comment"></p></td>
						</tr>

						<tr>
						<th>Class</th>
						<td>:</td>
						<td><select name="class" id="class">
							<option value="select-class" selected>--Select Class--</option>
							<option value="FE" >FE</option>
							<option value="SE" >SE</option>
							<option value="TE" >TE</option>
							<option value="BE" >BE</option>
							<option value="others" >OTHERS</option>
						</select></td>
						</tr>

						<tr>
						<th>Department</th>
						<td>:</td>
						<td><select name="dept" id="dept">
							<option value="I" selected>--Select Dept--</option>
							<option value="Information Technology">Information Technology</option>
							<option value="Computer Science">Computer Science</option>
							<option value="Electronics And Telecommunication">Electronics And Telecommunication</option>
							<option value="Mechanical">Mechanical</option>
							<option value="others" >OTHERS</option>
						</select></td>
						</tr>

						<tr>
						<th>Email</th>
						<td>:</td>
						<td><input type="email" name="email" id="email1"></td>
						<td><p name="comment1" id="comment1"></p></td>
						</tr>

						<tr>
						<th>Contact</th>
						<td>:</td>
						<td><input type="text" name="phone" id="phone" onkeyup="limit(this,10);"></td>
						<td><p name="comment2" id="comment2"></p></td>
						</tr>

						<tr>
						<th>Student ID</th>
						<td>:</td>
						<td><input type="tel" name="tele" id="tele" onkeyup="limit(this,10);"></td>
						<td><p name="comment3" id="comment3"></p></td>
						</tr>

						<tr>
						<th>Gender</th>
						<td>:</td>
						<td>
						<input type="radio" name="gender" id="male" value="Male">Male &nbsp;
						<input type="radio" name="gender" id="female" value="Female">Female
						</td>
						</tr>

					</table>
					</fieldset>
				
					<br><br>
					<center>
				
					<fieldset>
					<legend>CSI-Membership period</legend>
					<table>
						<tr>
							<th>DBIT-CSI membership</th>
							<td>:</td>
							<td><input type="radio" name="dmem" value="1" onclick="manageFee(this);">1 year&nbsp;
								<input type="radio" name="dmem" value="2" onclick="manageFee(this);">2 years&nbsp;
								<input type="radio" name="dmem" value="3" onclick="manageFee(this);">3 years&nbsp;
								<input type="radio" name="dmem" value="no" onclick="manageFee(this);">No&nbsp;</td>	
						</tr>
						
						<tr>
							<th>Amount to be paid</th>
							<td>:</td>
							<td>&#8377;<input type="text" name="amt" readonly></td>
						</tr>
					</table>
					</fieldset>
	</center>
		<script src="validate.js"></script>
				<center>
				<input type="submit" value="Submit" name="submit" id="submit" /> 
				</center><br>
		</form>

		

	</body>
</html>





