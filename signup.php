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
    <title>Chat-App Signup</title>

</head>
<body class="d-flex
                justify-content-center
                align-items-center
                vh-100">
<section>
    <div class="container">
        <div class="row justify-content-center">

<div class="w-400 p-5 shadow rounded">
    <form method="post" action="app/http/signup.php" enctype="multipart/form-data">
        <div class="d-flex
                    justify-content-center
                    align-items-center
                    flex-column">
            <img src="img/logo.png" class="w-50">
            <h3 class="display-4 fs-1 text-center">Sign Up</h3>

        </div>
        <?php if(isset($_GET['error'])){?>
        <div class="alert alert-warning" role="alert">
            <?php echo htmlspecialchars($_GET['error']);?>
        </div>
        <?php }
        if(isset($_GET['name'])){
            $name = $_GET['name'];
        }else $name = '';

        if(isset($_GET['username'])){
            $username = $_GET['username'];
        }else $username = '';
        ?>
        <div class="mb-3">
            <label for="inputName" class="form-label">Name</label>
            <div class="col-md-10">
                <input type="text"
                       class="form-control"
                       id="inputName"
                       name="name"
                       value="<?=$name;?>">
            </div>
        </div>
        <div class="mb-3">
            <label for="inputUser" class="form-label">Username</label>
            <div class="col-md-10">
                <input type="text"
                       class="form-control"
                       id="inputUser"
                       name="username"
                       value="<?=$username;?>">
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
        <div class="mb-3">
            <label for="file" class="form-label">Picture</label>
            <input class="form-control"
                   type="file"
                   id="file"
                   name="pp">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Sign Up</button>
            <a href="index.php">Login</a>
        </div>

    </form>
</div>
                   </div>
        </div>

</section>


</body>
</html>

    <?php
}else{
    header("Location: home.php");
    exit;
}
?>