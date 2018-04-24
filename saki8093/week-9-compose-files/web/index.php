<?php
echo "<html><title> Cloud Tech assignment </title>";
echo "<head> Cloud Technologies assignemnt week 8 </head>";
echo "<body> <br><br> <center> This docker network has a load balancer which redirects traffic to two web containerised servers which is connected to a secure MySQL database server";
echo "<br><br><br><table name=\"students\" border=\"1\">";
echo "<tr> <th> Name </th> <th> Age </th> <th> Location </th> </tr>";
$hostname="db_3";
$mysqli = mysqli_connect($hostname, "root", "password", "cloud", "3306");
if(mysqli_connect_error())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$query="SELECT * from basic";
$result = mysqli_query($mysqli,$query);
while($row=mysqli_fetch_row($result)){
        echo "<tr> <td> $row[0] </td>
                <td> $row[1] </td>
                <td> $row[2] </td> </tr>";
}
echo "</table></body></html>";
?>

