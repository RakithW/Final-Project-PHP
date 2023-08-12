<?php
// header.php file 
require './inc/header.php';

// check if the user is not logged in then redirect to signin.php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('location:signin.php');
    exit(); // exit to prevent further execution
} else {
    // include the database.php file to connect to the database
    require './inc/database.php';

    // set up the SQL query to select data from the 'finalcustomers' table
    $sql = "SELECT * FROM finalcustomers";

    // run the SQL query
    $result = $conn->query($sql);

    // display the table of customer data
    echo '<section class="person-row">';
    echo '<table class="table table-striped">
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Dog Name</th>
                    <th>Dog Breed</th>
                    <th>Phone Number</th>
                <tr>';

    // loop through the result and display each row
    foreach ($result as $row) {
        echo '
                <tr>
                    <td>' . $row['fname'] . '</td>
                    <td>' . $row['lname'] . '</td>
                    <td>' . $row['dogname'] . '</td>
                    <td>' . $row['dogtype'] . '</td>
                    <td>' . $row['telNumber'] . '</td>
                </tr>';
    }

    echo '</table>';

    // logout button with a link to logout.php
    echo '<a href="logout.php" class="btn btn-warning">Logout</a>';

    echo '</section>'; // close the section

    // close the database connection
    $conn = null;
}

// footer.php file 
require './inc/Footer.php';
?>