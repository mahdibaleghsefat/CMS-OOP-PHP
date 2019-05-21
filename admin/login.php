<?php include("includes/header.php"); ?>

<?php

if ($session->is_signed_in()) {
    redirect("index.php");
}

if (isset($_POST['submit'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

// method to check database user

    $user_found = User::verify_user($username, $password);

    if ($user_found) {
        $session->login($user_found);
        redirect("index.php");
    } else {
        $the_message = "your password or username is incorrect.";
    }
} else {
    $username = "";
    $password = "";
    $the_message = "";
}
?>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin:0 auto;">

                <h4 class="bg-danger"><?php echo $the_message; ?></h4>

                <form action="" method="post">

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control"
                               value="<?php echo htmlentities($password) ?>">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" name="password" class="form-control"
                               value="<?php echo htmlentities($password) ?>">
                    </div>

                    <div class="form-group">
                        <input type="submit" name="submit" value="submit" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php include("includes/footer.php"); ?>