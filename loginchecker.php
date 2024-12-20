<?php
session_start();
include("connexion.php");
if(isset($_POST["signin"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = "SELECT * FROM `login`";
    $result = mysqli_query($connection, $query);
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        if($row["email"] == $email && $row["password"] == $password) {
            $_SESSION["email"] = $email;
            header("location:user.php");
        }
    }
}
?> 