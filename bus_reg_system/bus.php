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
 <a href="bus_app.php">Bus Application</a> |
 <a href="pick_up_point.php">Pickup</a> |
 <a href="drop_off_point.php">Dropoff</a> |
 <a href="bus_registration.php">Bus Registration</a> |
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
$sql = "SELECT * FROM bus";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr>
    <th>BusID</th>
    <th>RouteID</th>
    <th>AdminID</th>
    <th>Capacity</th>
    <th>SpaceStatus</th>
    <th>CreatedAt</th>
    </tr>";
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>


        <td>".$row["bus_id"]."</td>
        <td>".$row["route_id"]."</td>
        <td>".$row["admin_id"]."</td>
        <td>".$row["capacity"]."</td>
        <td>".$row["space_status"]."</td>
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