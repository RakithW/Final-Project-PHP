<?php
// header.php file 
require './inc/header.php';
?>

<section class="signin-masthead">
    <div>
        <h3>Oopsies! Looks Like You Are Not Signed In!</h3>
    </div>
</section>
<main>
    <section class="row signin-row">
        <div class="col align-self-center">
            <p>Sign in below</p>
            <form method="post" action="./inc/validate.php">
                <!-- input field for username -->
                <p><input class="form-control" name="username" type="text" placeholder="Username" required /></p>
                <!-- input field for password -->
                <p><input class="form-control" name="password" type="password" placeholder="Password" required /></p>
                <!-- submit button -->
                <input class="btn btn-primary" type="submit" value="Login" />
            </form>
        </div>
    </section>
</main>

<?php
// footer.php file 
require './inc/footer.php';
?>