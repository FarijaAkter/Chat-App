<?php
session_start();

if(!isset($_SESSION['username'])){
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/logo.png">
    <title>Chat-App Login</title>

</head>
    <body class="d-flex
                justify-content-center
                align-items-center
                vh-100">
<div class="w-400 p-5 shadow rounded">
    <form method="post" action="app/http/auth.php">
        <div class="d-flex
                    justify-content-center
                    align-items-center
                    flex-column">
            <img src="img/logo.png" class="w-50">
            <h3 class="display-4 fs-1 text-center">LOGIN</h3>

        </div>
        <?php if(isset($_GET['error'])){?>
        <div class="alert alert-warning" role="alert">
            <?php echo htmlspecialchars($_GET['error']);?>
        </div>
        <?php }?>
        <?php if(isset($_GET['success'])){?>
        <div class="alert alert-success" role="alert">
            <?php echo htmlspecialchars($_GET['success']);?>
        </div>
      <?php }?>
        <div class="mb-3">
            <label for="inputUser" class="form-label">Username</label>
            <div class="col-md-10">
                <input type="text"
                       class="form-control"
                       id="inputUser"
                       name="username"
                       value="">
            </div>
        </div>
        <div class="mb-3">
            <label for="inputPassword" class="form-label">Password</label>
            <div class="col-md-10">
                <input type="password"
                       class="form-control"
                       id="inputPassword"
                       name="password"
                       value="">
            </div>
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Login</button>
            <a href="signup.php">Sign Up</a>
        </div>

    </form>
</div>


</body>
</html>

    <?php
}else{
    header("Location: home.php");
    exit;
}
?>
