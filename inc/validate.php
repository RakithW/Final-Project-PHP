<?php
// get the user inputs from the form and hash the password
$username = $_POST['username'];
$password = hash('sha512', $_POST['password']);

require 'database.php';

// set up and run the SQL query to check for matching username and password
$sql = "SELECT user_id FROM finaladmins WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

// get the number of rows returned by the query
$count = $result->rowCount();

// check if there's a match
if ($count == 1) {
    echo '<p>Logged in successfully</p>';

    // start a session and store the user_id in a session variable
    session_start();
    foreach ($result as $row) {
        $_SESSION['user_id'] = $row['user_id'];

        // redirect the user to the restricted page
        header('Location: ../view-database.php');
    }
} else {
    echo '<p>Login Failed</p>';
}

// close the database connection
$conn = null;
?>