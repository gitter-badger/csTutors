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
*/

print('
<html>
<head>
	<title>On-Demand Tutors</title>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
	<link href="css/admin.css" rel="stylesheet" type="text/css">
	<link href="css/two_col.css" rel="stylesheet" type="text/css">

</head>
<body>
<div id="main">
	<div id="container">
		<div id="header">
			<div id="heading">
				<a href="home_admin.php"><h1><center>
							On-Demand Tutors
						</center></h1></a>
			</div>
			<ul id="top-navigation">
				<h3>
					<li><a href="about.php">About Us</a></li>
					<li><a href=>Dashboard</a></li>
					<li><a href="logout.php">Logout</a></li>
				</h3>
			</ul>
		</div>
		<div id="middle">
			<div id="center-column">
				<div class="top-bar">
					<br><br><h1> View Statistics Reports </h1></a>
					<!--br><a href="perDayReport.php"><h1 style="font-size:15px"> Per Day </h1></a>
                    <br><a href="perCourseReport.php"> <h1 style="font-size:15px"> Per Course </h1> </a-->
					<br><a href="per_tutor_report.php"> <h1 style="font-size:15px"> Per Tutor </h1> </a>
					</h1>
				</div>



			</div>
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
');