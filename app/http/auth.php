<?php
session_start();
/*$password = $_POST['password'];
$username = $_POST['username'];
var_dump($_POST);*/
# check if username, password submitted
if(isset($_POST['username']) &&
    isset($_POST['password'])) {

  # database connection file
    include '../db.conn.php';

    # get data from POST request and store them in var
    $password = $_POST['password'];
    $username = $_POST['username'];
    if(empty($username)){
        # error message
        $em = "Username is required";

        /*
       redirect to 'index.php' and
       passing error message and data
     */
        header("Location: ../../index.php?error=$em");
        exit;
    }else if(empty($password)){
        # error message
        $em = "Password is required";
        /*
       redirect to 'index.php' and
       passing error message and data
     */
        header("Location: ../../index.php?error=$em");
        exit;
    }else{
        $sql="SELECT *
              FROM users WHERE username=?";
        $stmt=$conn->prepare($sql);
        $stmt->execute([$username]);
#IF USER IS EXISTS
        if($stmt->rowCount() === 1){
 #FETCHING USER DATA
            $user = $stmt->fetch();

 #IF BOTH USERNAME ARE Strictly Equal
            if($user['username'] === $username){
#verify the encrypted password
                if(password_verify($password,$user['password'])){
#successfully loged in
                    //echo $username;
                    $_SESSION['username']= $user['username'];
                    $_SESSION['name']= $user['name'];
                    $_SESSION['user_id']= $user['user_id'];
                    header("Location: ../../home.php");
                }else{
                    $em ="Incorrect Username or Password";
                    header("Location: ../../index.php?error=$em");
                }
            }else{
                $em ="Incorrect Username or Password";
                header("Location: ../../index.php?error=$em");
                exit;
            }
        }
    }


}else {
    header("Location: ../../index.php");
    exit;
}