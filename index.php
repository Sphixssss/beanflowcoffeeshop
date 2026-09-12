<?php
session_start();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("Location: admin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>BeanFlow - Login</title>

    <link rel="stylesheet" href="style.css">
</head>

<body class="login-page">

<div class="login-wrapper">

    <section class="login-brand">

        <div class="brand-inner">

            <img
                src="Beanflow logo.png"
                alt="BeanFlow Logo"
                class="login-logo"
            >

            <h1>
                Bean<span>Flow</span>
            </h1>

            <p class="brand-small">
                COFFEE SHOP MANAGEMENT SYSTEM
            </p>

            <div class="brand-line"></div>

            <h2>
                Smooth Coffee.<br>
                Better Flow.
            </h2>

            <p class="brand-text">
                Managing customer orders, brewing,
                inventory, and sales in one organized
                web-based system.
            </p>

        </div>

    </section>


    <section class="login-area">

        <div class="login-card">

            <p class="welcome">
                Welcome Back!
            </p>

            <h2>Login</h2>

            <p class="login-description">
                Please sign in to continue to BeanFlow.
            </p>


            <?php
            if (isset($_GET["error"])) {
            ?>

                <div class="error-box">
                    Wrong username or password.
                    Please try again.
                </div>

            <?php
            }
            ?>


            <form
                action="login_process.php"
                method="POST"
            >

                <label for="username">
                    Username
                </label>

                <input
                    type="text"
                    id="username"
                    name="username"
                    placeholder="Enter username"
                    required
                >


                <label for="password">
                    Password
                </label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Enter password"
                    required
                >


                <button
                    type="submit"
                    class="primary-button"
                >
                    LOGIN
                </button>


                <button
                    type="reset"
                    class="secondary-button"
                >
                    RESET
                </button>

            </form>


            <p class="login-quote">
                Good Coffee, Good Flow, Good Day!
            </p>

        </div>

    </section>

</div>

</body>
</html>