<?php
session_start();
include("connexion.php");
if(isset($_POST["signin"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];

    if(isset($_POST["checkbox"])) {
        $token = rand(100,2000);
        $query = "UPDATE `login` set token = $token";
        mysqli_query($connection, $query);
        setcookie('token', $token, time() + (86400 * 30), "/"); 
       }
    $query = "SELECT * FROM `login`";
    $result = mysqli_query($connection, $query);
    
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        if($row["token"] == $token) {
            $_SESSION["email"] = $email;
            header("location:user.php");
        }else if($row["email"] == $email && $row["password"] == $password) {
            $_SESSION["email"] = $email;
            header("location:user.php");
        }
    }
}
?> 