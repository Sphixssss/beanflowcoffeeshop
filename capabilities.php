<?php
require "auth.php";

$menu = [
    "Americano" => 90,
    "Cappuccino" => 120,
    "Cafe Latte" => 130,
    "Caramel Macchiato" => 145,
    "Mocha" => 140
];

$orderCreated = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $coffee =
        $_POST["coffee"] ?? "";

    $size =
        $_POST["size"] ?? "";

    $quantity =
        (int) ($_POST["quantity"] ?? 1);


    if (
        isset($menu[$coffee]) &&
        in_array(
            $size,
            ["Small", "Medium", "Large"]
        ) &&
        $quantity >= 1
    ) {

        $basePrice =
            $menu[$coffee];

        $sizePrice = 0;


        if ($size === "Medium") {
            $sizePrice = 20;
        }


        if ($size === "Large") {
            $sizePrice = 40;
        }


        $pricePerCup =
            $basePrice + $sizePrice;

        $total =
            $pricePerCup * $quantity;


        $_SESSION["last_order"] = [
            "coffee" => $coffee,
            "size" => $size,
            "quantity" => $quantity,
            "price" => $pricePerCup,
            "total" => $total
        ];


        $orderCreated = true;
    }
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

    <title>
        BeanFlow - Project Features
    </title>

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

            <a href="members.php">
                Group Members
            </a>

            <a
                href="capabilities.php"
                class="active"
            >
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
                MAJOR SYSTEM FEATURE
            </span>

            <h1>
                Coffee Order Calculator
            </h1>

            <p>
                Select a coffee, cup size,
                and quantity. BeanFlow will
                automatically calculate the
                total order price.
            </p>

        </header>


        <div class="order-grid">

            <section class="order-card">

                <h2>
                    Create Order
                </h2>


                <form
                    method="POST"
                    action="capabilities.php"
                >

                    <label>
                        Coffee
                    </label>

                    <select
                        name="coffee"
                        required
                    >

                        <option value="">
                            Select Coffee
                        </option>


                        <?php
                        foreach (
                            $menu as
                            $coffeeName =>
                            $coffeePrice
                        ) {
                        ?>

                            <option
                                value="<?php
                                echo htmlspecialchars(
                                    $coffeeName
                                );
                                ?>"
                            >
                                <?php
                                echo htmlspecialchars(
                                    $coffeeName
                                );
                                ?>

                                -

                                ₱<?php
                                echo number_format(
                                    $coffeePrice,
                                    2
                                );
                                ?>
                            </option>

                        <?php
                        }
                        ?>

                    </select>


                    <label>
                        Cup Size
                    </label>

                    <select
                        name="size"
                        required
                    >

                        <option value="">
                            Select Size
                        </option>

                        <option value="Small">
                            Small + ₱0
                        </option>

                        <option value="Medium">
                            Medium + ₱20
                        </option>

                        <option value="Large">
                            Large + ₱40
                        </option>

                    </select>


                    <label>
                        Quantity
                    </label>

                    <input
                        type="number"
                        name="quantity"
                        value="1"
                        min="1"
                        max="20"
                        required
                    >


                    <button
                        type="submit"
                        class="primary-button"
                    >
                        CALCULATE ORDER
                    </button>

                </form>

            </section>


            <section class="summary-card">

                <h2>
                    Order Summary
                </h2>


                <?php
                if ($orderCreated) {
                ?>

                    <div class="success-message">
                        Order successfully calculated.
                    </div>


                    <div class="summary-line">

                        <span>
                            Coffee
                        </span>

                        <strong>
                            <?php
                            echo htmlspecialchars(
                                $coffee
                            );
                            ?>
                        </strong>

                    </div>


                    <div class="summary-line">

                        <span>
                            Size
                        </span>

                        <strong>
                            <?php
                            echo htmlspecialchars(
                                $size
                            );
                            ?>
                        </strong>

                    </div>


                    <div class="summary-line">

                        <span>
                            Quantity
                        </span>

                        <strong>
                            <?php
                            echo $quantity;
                            ?>
                        </strong>

                    </div>


                    <div class="summary-line">

                        <span>
                            Price per Cup
                        </span>

                        <strong>
                            ₱<?php
                            echo number_format(
                                $pricePerCup,
                                2
                            );
                            ?>
                        </strong>

                    </div>


                    <div class="summary-total">

                        <span>
                            Total
                        </span>

                        <strong>
                            ₱<?php
                            echo number_format(
                                $total,
                                2
                            );
                            ?>
                        </strong>

                    </div>


                    <p class="cash-text">
                        Payment Method: Cash
                    </p>


                <?php
                } else {
                ?>

                    <div class="no-order">

                        <h3>
                            No Order Yet
                        </h3>

                        <p>
                            Complete the order form
                            to display your order
                            summary here.
                        </p>

                    </div>

                <?php
                }
                ?>

            </section>

        </div>


        <section class="section-block">

            <div class="section-heading">

                <span class="eyebrow">
                    SYSTEM FUNCTIONS
                </span>

                <h2>
                    BeanFlow Capabilities
                </h2>

            </div>


            <div class="capability-grid">

                <article class="capability-card">

                    <h3>
                        Customer Ordering
                    </h3>

                    <p>
                        Allows customers to browse
                        products and prepare orders.
                    </p>

                </article>


                <article class="capability-card">

                    <h3>
                        Cart & Checkout
                    </h3>

                    <p>
                        Allows customers to review
                        selected products before
                        checkout.
                    </p>

                </article>


                <article class="capability-card">

                    <h3>
                        Brewing Queue
                    </h3>

                    <p>
                        Helps staff organize confirmed
                        orders for coffee preparation.
                    </p>

                </article>


                <article class="capability-card">

                    <h3>
                        Inventory
                    </h3>

                    <p>
                        Allows the Owner/Admin to
                        monitor available products.
                    </p>

                </article>


                <article class="capability-card">

                    <h3>
                        Sales Reporting
                    </h3>

                    <p>
                        Uses completed transactions
                        for monitoring and reporting.
                    </p>

                </article>


                <article class="capability-card">

                    <h3>
                        AI Promotion Recommendation
                    </h3>

                    <p>
                        Provides possible promotion
                        recommendations based on
                        sales performance.
                    </p>

                </article>

            </div>

        </section>

    </main>

</div>

</body>
</html>