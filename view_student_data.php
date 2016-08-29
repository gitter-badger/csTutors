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
                <a href="home_tutor.php"><h1><center>
                            On-Demand Tutors
                        </center></h1></a>
            </div>
            <ul id="top-navigation">
                <h3>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="tutor_dashboard.php">Dashboard</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </h3>
            </ul>
        </div>
        <div id="middle">
            <div id="center-column">
                <div class="top-bar">
                    <h1>Student Information</h1><br>
                </div>
                <!--><div class="table">
                    <table class="listing form" cellpadding="0" cellspacing="0">
                        <form action='schedule2.php' method='GET'>
                            <tbody>
                            <tr>
                                <td width="172"><strong>Enter Student Name :</strong></td>
                                <td><input type="text" class="text" name='day'></td>
                            </tr>
                            </tbody>
                    </table>
                    <p><input type='submit' name = 'submit' value='Submit'></p>
                    </form>
                </div> <!-- end #table -->

                <?php

                $user = 'root';
                $pass = '';
                $db = 'schedule';

                $conn = new mysqli('localhost', $user, $pass, $db);
                if ($conn->connect_errno > 0)
                {
                    echo "Failed to connect to MySQL: ";
                    die('Unable to connect to database [' . $db->connect_error . ']');
                }

                ?>

                <div class="table">
                    <table class="listing" cellpadding="0" cellspacing="0">
                        <tbody>
                        <tr>
                            <th> SLOT TIMINGS </th>
                            <th> ROOM# </th>
                            <th> COURSE </th>
                            <th> LED# </th>
                        </tr>

                        <?php
                        //?>

                        <tr>
                            <td class="style1">
                                <?php echo $row['Starttime']." TO ".$row['Endtime']; ?>
                            </td>
                            <td class="style2">
                                <?php echo $row['Room'];?>
                            </td>
                            <td class="style3">
                                <?php echo $row['Course'];?>
                            </td>
                            <td class="style3">
                                <?php echo $row['LED'];?>
                            </td>

                        </tr>
                        </tbody>
                        <?php
                        /* 		}
                            } */
                        ?>

                    </table>

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