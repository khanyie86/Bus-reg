<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Bus Registration System</title>
</head>
<body>
   <h3>BUS REGISTRATION SYSTEM</h3> 

   The fully completed bus registration form must be sent to the administrative office<br>
 <br>
 <a href="parent.php">Parent</a> |
 <a href="learner.php">Leaner</a> |
 <a href="admin.php">Administrator</a> |
 <a href="bus.php">Bus</a> |
 <a href="route.php">Route</a> |
 <a href="bus_route.php">Bus Route</a> |
 <a href="pick_up_point.php">Pick up Point</a> |
 <a href="drop_off_point.php">drop of Point</a> |
 <a href="bus_registration.php">bus Registration</a> |
 <a href="waiting_list.php">Waiting List</a>
 <br>
  
 <?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "bus_reg_system";
 
 
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
 
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
// SQL query to retrieve data
$sql = "SELECT * FROM route";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr>
    <th>RouteID</th>
    <th>PickUpID</th>
    <th>DropOffID</th>
    <th>RouteName</th>
    <th>CreatedAt</th>
    </tr>";
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>


        <td>".$row["route_id"]."</td>
        <td>".$row["pick_up_id"]."</td>
        <td>".$row["drop_off_id"]."</td>
        <td>".$row["route_name"]."</td>
        <td>".$row["created_at"]."</td>


        </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
// Close connection
$conn->close();
?>

</body>
</html>
