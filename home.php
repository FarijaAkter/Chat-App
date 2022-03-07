<?php
session_start();

if(isset($_SESSION['username'])){
    ?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Chat App - Home</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" href="img/logo.png">
    </head>
    <body class="d-flex
                 justify-content-center
                 align-items-center
                 vh-100">
    <div class="p-2 w-400 rounded shadow">
        <div>
            <div class="d-flex
                        mb-3 p-3 bg-light
                         justify-content-between
                         align-items-center">
                <div class="d-flex
                             align-items-center">
                    <img src="uploads/user.png" class="w-50 rounded-circle">

                </div>

            </div>
        </div>

    </div>

    </body>
    </html>


<?php
}else{
    header("Location: index.php");
    exit;
}
?>