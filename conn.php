<?php
include 'db.php'; // Include the database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Name = $_POST['name'];
    $Course=$_POST['course'];
    $Gender=$_POST['gender'];
    $Address=$_POST['address'];
    $Email= $_POST['email'];
    $Phone = $_POST['phone'];
    


    $sql = "INSERT INTO registration (name, course, gender, address, email, phone) VALUES ('$Name', '$Course', '$Gender', '$Address','$Email','$Phone' )";

    if ($conn->query($sql) === true) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();

?>
