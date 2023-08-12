<?php
//database.php file 
require './inc/database.php';

// get values from the form
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];

require './inc/header.php';

// variable to track validation status
$ok = true;

// validate inputs and display appropriate messages
if (empty($first_name)) {
    echo '<p>First name is required</p>';
    $ok = false;
}
if (empty($last_name)) {
    echo '<p>Last name is required</p>';
    $ok = false;
}
if (empty($username)) {
    echo '<p>Username is required</p>';
    $ok = false;
}
if (empty($password) || ($password != $confirm)) {
    echo '<p>Invalid Password</p>';
    $ok = false;
}

// dcide whether to save data or not based on validation status
if ($ok) {
    // hash the password for security
    $password = hash('sha512', $password);

    // set up SQL query
    $sql = "INSERT INTO finaladmins (first_name, last_name, username, password) VALUES ('$first_name', '$last_name', '$username', '$password');";

    // execute the SQL query
    $conn->exec($sql);

    // display success message
    echo '<section class="success-row">';
    echo '<div>';
    echo '<h3>Admin Saved</h3>';
    echo '</div>';
    echo '</section>';

    // close the database connection
    $conn = null;
}
?>

<!-- success message and a link to sign in page -->
<section class="row success-back-row">
    <div>
        <p>You're all done! Click the button below to go to the sign-in page.</p>
        <a href="signin.php" class="btn btn-primary">Sign In</a>
    </div>
</section>

<?php
// footer.php file
require './inc/footer.php';
?>