<?php
include('connection.php');

session_start();
//Unset the variables stored in session
unset($_SESSION['id']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form action="" method="post">
        <div class="row px-3">

            <label class="mb-1">
                <h6 class="mb-0 text-sm">Admin Username</h6>
            </label>
            <input type="text" name="username" id="inputEmail" placeholder="Username" required>
        </div>
        <div class="row px-3">
            <label class="mb-1">
                <h6 class="mb-0 text-sm">Admin Password</h6>
            </label>
            <input type="password" name="password" id="inputPassword" placeholder="Password" required>

        </div>


        <br>
        <button type="submit" name="login" class="btn btn-primary text-center">Login</button>
        <a href="forgotPassword.php">Forgot Password?</a>

    </form>
    <?php
   

    if (isset($_POST['login'])) {


        $username = mysqli_real_escape_string($connection, $_POST['username']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);

        $queryss = mysqli_query($connection, "select * from agent where username ='$username' and pw = '$password'") or die($connection->error);
        $count = mysqli_num_rows($queryss);
        $row = mysqli_fetch_array($queryss);


        if ($count > 0) {

            $_SESSION['id'] = $row['agent_id'];
            echo ('<script>location.href = "home.php"</script>');
            echo 'true';
            session_write_close();
            exit();
        } else {
            session_write_close();
    ?>
            <div class="alert alert-danger"><i class="icon-remove-sign"></i>&nbsp;Access Denied</div>

    <?php

        }
    }
    ?>



</body>

</html>