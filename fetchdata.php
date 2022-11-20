<!DOCTYPE html>
<html>
<head>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<style>

table {
  border-collapse: collapse;
  width: 100%;
}

tr {
  border-bottom: 1px solid #ddd;
}

td{
    text-align: center;
}
th, td {
  text-align: center;
  padding: 8px;
}
h1{
    text-align: center;
}

tr:nth-child(even) {background-color: #f2f2f2;}

.searchBox{
display: inline;
    width: 20%;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.375rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;

}
</style>
</head>
<body>
    <div class="form-group">

        <button class="btn btn-primary">Insert</button>
        <button class="btn btn-info">Edit</button>
        <input type="search" placeholder="Enter id to delete record" class="searchBox" name="search">
        <button class="btn btn-danger">Delete</button>
        <input type="search" placeholder="search...." class="searchBox" name="search">
        <button class="btn btn-success">Search</button>
</div>




<?php
include 'conn.php';

// Create connection

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo '<table style="width:100%">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile no</th>
            <th>Address</th>
        </tr>';
$sql = "SELECT id, name, email, mobile_no, address FROM users";
$result = $conn->query($sql);
echo "<h1>All Users Data From database</h1>";


if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["id"]. "</td> 
        <td>" . $row["name"]. " </td>
        <td>" . $row["email"] . " </td>
        <td>" . $row["mobile_no"] . " </td>
        <td>" . $row["address"] . " </td> </tr>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>


</body>
</html>