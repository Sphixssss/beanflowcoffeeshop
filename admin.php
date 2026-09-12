<?php
require "auth.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>BeanFlow - Admin</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="page-wrapper">

    <nav class="navbar">

        <a
            href="admin.php"
            class="nav-brand"
        >

            <img
                src="Beanflow logo.png"
                alt="BeanFlow Logo"
                class="nav-logo"
            >

            <div class="brand-name">

                <h2>BeanFlow</h2>

                <span>
                    Coffee Shop Management
                </span>

            </div>

        </a>


        <div class="nav-links">

            <a
                href="admin.php"
                class="active"
            >
                Admin
            </a>

            <a href="project.php">
                Project Description
            </a>

            <a href="members.php">
                Group Members
            </a>

            <a href="capabilities.php">
                Project Features
            </a>

            <a
                href="logout.php"
                class="logout"
            >
                Logout
            </a>

        </div>

    </nav>


    <main class="main-content">

        <header class="page-header">

            <span class="eyebrow">
                ADMIN PAGE
            </span>

            <h1>
                BeanFlow: A Web-Based Coffee Shop
                Management System with AI-Based
                Promotion Recommendation
            </h1>

            <p>
                Welcome,
                <strong>
                    <?php
                    echo htmlspecialchars(
                        $_SESSION["username"]
                    );
                    ?>
                </strong>.
                This page provides an overview of
                the BeanFlow project.
            </p>

        </header>


        <section class="info-row">

            <div class="number-circle">
                01
            </div>

            <div>

                <h2>
                    General Description
                </h2>

                <p>
                    BeanFlow is a web-based coffee shop
                    management system designed to organize
                    customer ordering, coffee preparation,
                    inventory monitoring, and sales
                    transactions.
                </p>

            </div>

        </section>


        <section class="info-row">

            <div class="number-circle">
                02
            </div>

            <div>

                <h2>
                    Problems Addressed
                </h2>

                <p>
                    Coffee shops may experience difficulty
                    handling customer orders, organizing
                    preparation, monitoring available
                    products, and recording transactions.
                </p>

            </div>

        </section>


        <section class="info-row">

            <div class="number-circle">
                03
            </div>

            <div>

                <h2>
                    Proposed Solution
                </h2>

                <p>
                    BeanFlow provides one centralized
                    web application for customer ordering,
                    staff brewing operations, inventory,
                    sales reporting, and administrative
                    monitoring.
                </p>

            </div>

        </section>


        <section class="section-block">

            <div class="section-heading">

                <span class="eyebrow">
                    ADMIN NAVIGATION
                </span>

                <h2>
                    Explore BeanFlow
                </h2>

            </div>


            <div class="admin-link-grid">

                <a
                    href="project.php"
                    class="admin-link-card"
                >

                    <div class="admin-number">
                        01
                    </div>

                    <div>

                        <h3>
                            Project Description
                        </h3>

                        <p>
                            View the project description,
                            proposed users, and system
                            capabilities.
                        </p>

                    </div>

                </a>


                <a
                    href="members.php"
                    class="admin-link-card"
                >

                    <div class="admin-number">
                        02
                    </div>

                    <div>

                        <h3>
                            Group Members
                        </h3>

                        <p>
                            View the members and their
                            responsibilities in the project.
                        </p>

                    </div>

                </a>


                <a
                    href="capabilities.php"
                    class="admin-link-card"
                >

                    <div class="admin-number">
                        03
                    </div>

                    <div>

                        <h3>
                            Project Features
                        </h3>

                        <p>
                            Test the working Coffee Order
                            Calculator feature.
                        </p>

                    </div>

                </a>

            </div>

        </section>

    </main>

</div>

</body>
</html>