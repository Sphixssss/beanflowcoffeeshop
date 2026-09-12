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

    <title>BeanFlow - Project Description</title>

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

            <a href="admin.php">
                Admin
            </a>

            <a
                href="project.php"
                class="active"
            >
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
                PROJECT DESCRIPTION
            </span>

            <h1>
                BeanFlow: A Web-Based Coffee Shop
                Management System with AI-Based
                Promotion Recommendation
            </h1>

            <p>
                BeanFlow connects customer ordering,
                staff brewing operations, and
                Owner/Admin business monitoring through
                one centralized web-based system.
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
                    BeanFlow is designed to improve and
                    organize the daily operations of a
                    coffee shop.
                </p>

                <p>
                    Customers can browse products, select
                    coffee, add items to their cart,
                    proceed to checkout, and pay through
                    cash.
                </p>

                <p>
                    Staff can process incoming orders,
                    manage the brewing queue, update order
                    status, and record completed
                    transactions.
                </p>

                <p>
                    The Owner/Admin can manage products,
                    inventory, orders, users, sales
                    reports, and AI-based promotion
                    recommendations.
                </p>

            </div>

        </section>


        <section class="section-block">

            <div class="section-heading">

                <span class="eyebrow">
                    SYSTEM USERS
                </span>

                <h2>
                    Proposed Users
                </h2>

            </div>


            <div class="user-grid">

                <article class="user-card">

                    <div class="user-icon">
                        C
                    </div>

                    <h3>Customer</h3>

                    <p>
                        Browses products, selects items,
                        manages the cart, checks out,
                        and monitors order status.
                    </p>

                </article>


                <article class="user-card">

                    <div class="user-icon">
                        S
                    </div>

                    <h3>Staff</h3>

                    <p>
                        Processes incoming orders,
                        manages the brewing queue,
                        and updates order status.
                    </p>

                </article>


                <article class="user-card">

                    <div class="user-icon">
                        A
                    </div>

                    <h3>
                        Owner / Admin
                    </h3>

                    <p>
                        Manages products, inventory,
                        users, orders, sales reports,
                        and promotion recommendations.
                    </p>

                </article>

            </div>

        </section>


        <section class="section-block">

            <div class="section-heading">

                <span class="eyebrow">
                    SYSTEM CAPABILITIES
                </span>

                <h2>
                    General Capabilities
                </h2>

            </div>


            <div class="general-feature-grid">

                <div class="general-feature">
                    <b>01</b>
                    Customer Account Management
                </div>

                <div class="general-feature">
                    <b>02</b>
                    Menu and Add-to-Cart
                </div>

                <div class="general-feature">
                    <b>03</b>
                    Cash Checkout
                </div>

                <div class="general-feature">
                    <b>04</b>
                    Brewing Queue Management
                </div>

                <div class="general-feature">
                    <b>05</b>
                    Inventory Management
                </div>

                <div class="general-feature">
                    <b>06</b>
                    Sales Reporting
                </div>

                <div class="general-feature">
                    <b>07</b>
                    AI Promotion Recommendation
                </div>

                <div class="general-feature">
                    <b>08</b>
                    Admin Product and Order Management
                </div>

            </div>

        </section>

    </main>

</div>

</body>
</html>