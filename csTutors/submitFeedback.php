<?php /*
 	csTutors -- A CMS for Computer Science tutoring
    Copyright (C) 2016 Dylan Parsons, Nick Ivanov

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/ ?>

<html>
<head>
	<title>On-Demand Tutors</title>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
	<link href="css/admin.css" rel="stylesheet" type="text/css">
	<link href="css/twoColFixLtHdr.css" rel="stylesheet" type="text/css">

</head>
<body>
<div id="main">
	<div id="container">
		<div id="header">
			<div id="heading">
				<a href="home_student.php"><h1><center>
							On-Demand Tutors
						</center></h1></a>
			</div>
			<ul id="top-navigation">
				<h3>
					<li><a href="about_student.php">About Us</a></li>
					<li><a href="studentDashboard.php">Dashboard</a></li>
					<li><a href="logout.php">Logout</a></li>
				</h3>
			</ul>
		</div>
		<div id="middle">
			<div id="center-column">
				<div class="top-bar">
					<h1>Submit Tutor Performance Feedback</h1><br>
				</div>

				<div class="table">
					<form action='submitFeedback.php' method='POST' >
						<table class="listing form" cellpadding="0" cellspacing="0">
							<tbody>
							<tr>
								<td width="172"><strong>Tutor Id:</strong></td>
								<td><input type="text" class="text" name='tutorId'></td>
							</tr>
							<tr>
								<td><strong>Tutor First Name:</strong></td>
								<td><input type="text" class="text" name='tutorName'></td>
							</tr>
							<tr>
								<td><strong>Was helpful? </strong></td>
								<td>
									<div>Yes <input type='radio' name='helpful' value='Yes' /> </div>
									<div>No <input type='radio' name='helpful' value='No' /> </div>
								</td>
							</tr>
							<tr>
								<td><strong>Rating</strong>(0 to 5):</td>
								<td><input type="text" class="text" name='rating'></td>
							</tr>
							<tr>
								<td><strong>Comments</strong><br>(max 500 char):</td>
								<td><input type='textarea' name='feedbackComments' id='feedbackComments' style="width:400px; height:100px" /> </td>
							</tr>
							</tbody>
						</table>
						<p><input type='submit' name = 'submit' value='Submit'></p>
					</form>
				</div> <!-- end #table -->

				<?php
				// Report all errors except E_NOTICE
				error_reporting(E_ALL & ~E_NOTICE);
				// Turn off error reporting
				//error_reporting(0);
				// Report runtime errors
				//error_reporting(E_ERROR | E_WARNING | E_PARSE);

				$user = 'root';
				$pass = '';
				$db = 'comptutor';

				$conn = new mysqli('localhost', $user, $pass, $db);
				if ($conn->connect_errno > 0)
				{
					echo "Failed to connect to Server. Please try again. ";
					die('Unable to connect to database [' . $db->connect_error . ']');
				}

				if (isset($_POST['submit']))
				{
					$role = $_POST['role'];
					$wasHelpful = $_POST['helpful'];
					$sql1 = "INSERT INTO TUTOR_RATING ('TutorID', 'FirstName', 'WasHelpful', 'Rating', 'Comments') VALUES ('$_POST[tutorId]', '$_POST[tutorName]', '$wasHelpful', '$_POST[rating]', '$_POST[feedbackComments]')" ;
					if($sql1 && $_POST[tutorId]!="" && $_POST[tutorName]!="" && $wasHelpful!="" && $_POST[rating]!="" )

						echo "\nFeedback Recorded!";
					else
						echo "\nError in updating! Please re-enter correct data";
				}
				?>
			</div> <!-- end #center -->
		</div>  <!-- end #middle -->
		<div id="footer">
			<p>
				Department of Computer Science <br>
				University&copy;2016
			</p>
		</div>
	</div> <!-- end #container -->
</div> <!-- end #main --></div>
</body>
</html>