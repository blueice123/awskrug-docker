<?php

include("config.php");
session_start();
$realserver = $_SERVER['SERVER_NAME'];
$server   = $_SERVER['SERVER_ADDR'];
$conhostname = php_uname('n');

// Simulate latency 
sleep($latency);


echo "<html>";
echo "<head>";
echo "<META http-equiv='Content-Type' content='text/html; charset=UTF-8'>";
echo "<title>AWSKRUG Docker Hands-On</title>";
echo "<script src='demo.js'></script>";
echo "</head>";
echo "<body>";

	echo "<table width=100% border=0>";
	echo "<tr>";
                echo "<th><b><font size='15'> AWSKRUG Docker Hands-On </font></b></th>&nbsp;&nbsp;";
                echo "</tr>";
                echo "<th>EC2 IP: $realserver</th>";
                echo "</tr>";
                echo "<th>Container IP: $server</th>";
                echo "</tr>";
                echo "<th>Container ID: $conhostname</th>";
		echo "<hr>";
                echo "</tr>";
                echo "</tr>";

		// Display images
		echo "<td align='center'>";
		echo "<img src='uploads/docker01.jpg' width=200px height=150px>&nbsp;&nbsp;";
		echo "<img src='uploads/docker02.jpg' width=200px height=150px>&nbsp;&nbsp;";
		echo "<img src='uploads/docker03.jpg' width=200px height=150px>&nbsp;&nbsp;";
		echo "<img src='uploads/docker04.jpg' width=200px height=150px>&nbsp;&nbsp;";
		echo "<img src='uploads/docker05.jpg' width=200px height=150px>&nbsp;&nbsp;";
                echo "</tr>";
		echo "<td align='center'>";
		echo "<img src='uploads/docker06.jpg' width=200px height=150px>&nbsp;&nbsp;";
		echo "<img src='uploads/docker07.jpg' width=200px height=150px>&nbsp;&nbsp;";
		echo "<img src='uploads/docker08.jpg' width=200px height=150px>&nbsp;&nbsp;";
		echo "<img src='uploads/docker09.jpg' width=200px height=150px>&nbsp;&nbsp;";
		echo "<img src='uploads/docker10.jpg' width=200px height=150px>&nbsp;&nbsp;";
		echo "</form>";
//		echo "</td>";
	echo "</tr>";
	echo "</table>";

echo "<hr>";
echo "</body>";
echo "</html>";
?>
