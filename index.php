<!-- header file -->
<?php require('./inc/header.php'); ?>

<main>
    <!-- section for the main masthead -->
    <section class="masthead">
        <div>
            <h1>Welcome to PawHaven!</h1>
        </div>
    </section>

    <!-- section containing sign-up and sign-in forms -->
    <section class="form-row row">
        <!-- sign Up Form -->
        <div class="col-sm-12 col-md-6 col-lg-6">
            <h3>Unleash the Fun - Sign Up Your Dog Today!</h3>
            <form method="post" action="save-admin.php">
                <p><input class="form-control" name="first_name" type="text" placeholder="First Name" required /></p>
                <p><input class="form-control" name="last_name" type="text" placeholder="Last Name" required /></p>
                <p><input class="form-control" name="username" type="text" placeholder="Username" required /></p>
                <p><input class="form-control" name="password" type="password" placeholder="Password" required /></p>
                <p><input class="form-control" name="confirm" type="password" placeholder="Confirm Password" required />
                </p>
                <input class="btn btn-light" type="submit" name="submit" value="Register" />
            </form>
        </div>

        <!-- sign In Form -->
        <div class="col-sm-12 col-md-6 col-lg-6">
            <h3>Welcome Back to PawHaven - Sign In Below!</h3>
            <form method="post" action="./inc/validate.php">
                <p><input class="form-control" name="username" type="text" placeholder="Username" required /></p>
                <p><input class="form-control" name="password" type="password" placeholder="Password" required /></p>
                <input class="btn btn-light" type="submit" value="Login" />
            </form>
        </div>
    </section>
</main>

<!-- footer file-->
<?php require('./inc/footer.php'); ?>