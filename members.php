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

    <title>BeanFlow - Group Members</title>

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

            <a href="project.php">
                Project Description
            </a>

            <a
                href="members.php"
                class="active"
            >
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

        <header class="simple-header">

            <span class="eyebrow">
                OUR TEAM
            </span>

            <h1>
                Group Members
            </h1>

            <p>
                The BeanFlow project is developed
                by four group members. Each member
                has a specific role in the development
                and documentation of the system.
            </p>

        </header>


        <div class="member-grid">

            <article class="member-card">

                <div class="member-avatar">
                    AD
                </div>

                <div class="member-info">

                    <h2>
                        Archeantes De Leon
                    </h2>

                    <p class="member-role">
                        Project Leader / Programmer
                    </p>

                    <div class="role-tags">

                        <span>Front-End</span>

                        <span>Back-End</span>

                    </div>

                    <p class="member-description">
                        Responsible for leading the
                        development of BeanFlow,
                        programming the system,
                        developing the front-end and
                        back-end components, and
                        integrating the different parts
                        of the application.
                    </p>

                </div>

            </article>


            <article class="member-card">

                <div class="member-avatar">
                    SM
                </div>

                <div class="member-info">

                    <h2>
                        Shann Gandhi Manacmol
                    </h2>

                    <p class="member-role">
                        UI Designer
                    </p>

                    <div class="role-tags">

                        <span>User Interface</span>

                        <span>Design</span>

                    </div>

                    <p class="member-description">
                        Responsible for designing the
                        user interface, arranging page
                        elements, and maintaining a
                        consistent visual design.
                    </p>

                </div>

            </article>


            <article class="member-card">

                <div class="member-avatar">
                    EA
                </div>

                <div class="member-info">

                    <h2>
                        EJ Ancheta
                    </h2>

                    <p class="member-role">
                        Documenter
                    </p>

                    <div class="role-tags">

                        <span>
                            Documentation
                        </span>

                    </div>

                    <p class="member-description">
                        Responsible for preparing and
                        organizing the documentation
                        of the BeanFlow project and
                        recording important project
                        information.
                    </p>

                </div>

            </article>


            <article class="member-card">

                <div class="member-avatar">
                    JA
                </div>

                <div class="member-info">

                    <h2>
                        Abano James
                    </h2>

                    <p class="member-role">
                        UI Designer
                    </p>

                    <div class="role-tags">

                        <span>User Interface</span>

                        <span>Design</span>

                    </div>

                    <p class="member-description">
                        Responsible for assisting in
                        the design of the BeanFlow
                        interface, page layouts,
                        visual elements, and overall
                        appearance of the application.
                    </p>

                </div>

            </article>

        </div>

    </main>

</div>

</body>
</html>