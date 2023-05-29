<?php
$host = "localhost"; 
$db   = "ProjeLab";
$user = "root"; 
$pass = ""; 

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get POST data
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$gender = $_POST['gender'];

// Insert data into database
$sql = "INSERT INTO students (full_name, email, gender) VALUES ('$fullname', '$email', '$gender')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully <br>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



// Display registered students
$result = $conn->query("SELECT * FROM students");
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["full_name"]. " - Email: " . $row["email"]. " - Gender: " . $row["gender"]. "<br>";
    }
} else {
    echo "no results";
}

$conn->close();
?>
