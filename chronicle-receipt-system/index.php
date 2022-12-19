<?php session_start(); ?>
<?php include('dbcon.php');

?>
<html>

<head>
    <style>
    body {
        color: #fff;
        font: 87.5%/1.5em 'Open Sans', sans-serif;
        background: url(bg10.jpg)no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    </style>

    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="form-wrapper">

        <form action="#" method="post">
            <h3 style="text-align:center">Login to Account</h3>

            <div class="form-item">
                <input type="text" name="user" required="required" placeholder="Username" autofocus required></input>
            </div>

            <div class="form-item">
                <input type="password" name="pass" required="required" placeholder="Password" required></input>
            </div>

            <div class="button-panel">
                <input type="submit" class="button" title="Log In" name="login" value="Login"></input>
            </div>
        </form>
        <?php
    if (isset($_POST['login'])) {
      $username = mysqli_real_escape_string($con, $_POST['user']);
      $password = mysqli_real_escape_string($con, $_POST['pass']);

      $query     = mysqli_query($con, "SELECT * FROM users WHERE  password='$password' and username='$username'");
      $row    = mysqli_fetch_array($query);
      $num_row   = mysqli_num_rows($query);

      if ($num_row > 0) {
        $_SESSION['user_id'] = $row['user_id'];
        header('location:home.php');
      } else {
        echo 'Invalid Username and Password Combination';
      }
    }
    ?>
        <div class="">
            <p><a href="#" class="account">Create New Account Here</a></p>
            <p><a href="#" class="account">Reset Password</a></p>
        </div>

    </div>

</body>

</html>