<?php

// Establish database connection
$conn = mysqli_connect('localhost', 'root', '', 'project_sy');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if form fields exist
    if(isset($_POST['date'], $_POST['time'], $_POST['dinner_lunch'], $_POST['menu'], $_POST['table_no'])) {
        // Retrieve form data
        $date = mysqli_real_escape_string($conn, $_POST['date']);
        $time = mysqli_real_escape_string($conn, $_POST['time']);
        $dinner_lunch = mysqli_real_escape_string($conn, $_POST['dinner_lunch']);
        $menu = mysqli_real_escape_string($conn, $_POST['menu']);
        $table_no = mysqli_real_escape_string($conn, $_POST['table_no']);

        // Prepare and execute SQL statement
        $sql = "INSERT INTO reservations (date, time, dinner_lunch, menu, table_no) 
                VALUES ('$date', '$time', '$dinner_lunch', '$menu', '$table_no')";

        if (mysqli_query($conn, $sql)) {
            // Echo JavaScript for alert message
            echo '<script>alert("New record created successfully");</script>';
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Form fields are not set.";
    }
}

// Close database connection
mysqli_close($conn);
?>
