<?php
//header.php file
require './inc/header.php';

// start the session to work with session variables
session_start();

// check if the user is not logged in then redirect to signin.php
if (!isset($_SESSION['user_id'])) {
    header('location: signin.php');
    exit(); // exit to prevent further execution
} else {
    // database.php file to connect to the database
    require './inc/database.php';

    // set up the SQL query to select data from the 'finaladmins' table
    $sql = "SELECT * FROM finaladmins";

    // run the SQL query
    $result = $conn->query($sql);

    // dsiplay the table of admin data
    echo '<section class="person-row">';
    echo '<table class="table table-striped">
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                <tr>';

    // loop through the result and display each row
    foreach ($result as $row) {
        echo '
                <tr>
                    <td>' . $row['first_name'] . '</td>
                    <td>' . $row['last_name'] . '</td>
                    <td>' . $row['username'] . '</td>
                </tr>';
    }

    echo '</table>';

    // logout button with a link to logout.php
    echo '<a href="logout.php" class="btn btn-warning">Logout</a>';

    echo '</section>';

    // close the database connection
    $conn = null;
}

// footer.php file
require './inc/Footer.php';
?>