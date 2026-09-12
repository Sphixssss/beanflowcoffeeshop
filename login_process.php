<?php
session_start();

$correctUsername = "admin";
$correctPassword = "beanflow123";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    if (
        $username === $correctUsername &&
        $password === $correctPassword
    ) {

        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;

        header("Location: admin.php");
        exit();

    } else {

        header("Location: index.php?error=1");
        exit();
    }
}

header("Location: index.php");
exit();
?>