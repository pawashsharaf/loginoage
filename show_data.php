<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login Form with Light Button</title>

</head>

<body>
    <div class="login-box">
<?php
// Database connection parameters
$servername = "localhost";
$username = "root"; // Change as needed
$password = "";     // Change as needed
$dbname = "loginin"; // Replace with your database name

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch data from the users table
$sql = "SELECT id, name, email, dob FROM userdata";
$result = $conn->query($sql);

// Check if there are records in the table
if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>DOB</th></tr>";

    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["dob"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

// Close the database connection
$conn->close();
?>
</div>
<html>
    <head>
       
        <style>
    table {
    width: 50%;
    border-collapse: collapse;
    margin: 17px -24px;
    font-size: 12px;
    text-align: left;
    border-color: transparent;
    color: #ffff;
   
}
    table :hover{
        color:  #03f484;
    }
    th, td {
        padding: 21px;
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color: linear-gradient(#141e30, #2a6c56);
    }
    td {
        white-space: nowrap; 
    }
</style>

    </head>
    <div class="footer">
@<i class="fa fa-copyright" aria-hidden="true">Pawash Sharaf</i></div>
<style>
   .footer {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    text-align: center;
    background-color: #f2f2f2;
    padding: 10px;
    box-shadow: 0 -1px 5px rgba(0,0,0,0.1); 
}

</style>
</html>