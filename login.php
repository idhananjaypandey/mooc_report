<?php
include 'conn.php';

$email = $_POST['log_email'];
$password = $_POST['log_password'];


       $sql = "SELECT * from users WHERE email = '$email' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>"; 
           if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, email, mobile_no, address FROM users";
$result = $conn->query($sql);
echo "<h1>All Users Data From database</h1>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["name"]. "  Email- " . $row["email"] . "Mobile no- " . $row["mobile_no"] . " Address- " . $row["address"] . "  <br>";
    }
} else {
    echo "0 results";
}
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }


?>