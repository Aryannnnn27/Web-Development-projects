<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
            background-image: url('thanks.jpg');
        }

        h1 {
            color: black;
            font-size: 2.5em;
            text-align: center;
            margin-top: 50px;
            opacity: 0; /* Initially hide the text */
            animation: fade-in 1.5s ease-in-out forwards; /* Apply fade-in animation */
        }

        p {
            color: #333;
            font-size: 1.2em;
            text-align: center;
            margin-top: 20px;
            opacity: 0; /* Initially hide the text */
            animation: fade-in 1.5s ease-in-out forwards; /* Apply fade-in animation */
        }

        /* Define the fade-in animation */
        @keyframes fade-in {
            from {
                opacity: 0; /* Start with text hidden */
            }
            to {
                opacity: 1; /* End with fully visible text */
            }
        }
    </style>
</head>

<body>
    <?php
    // Start the session
    session_start();

    // Retrieve the customer name from the session variable
    if (isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
        $customerName = $user['name'];
    } else {
        $customerName = "Valued Customer";
    }

    // Display the thank you message
    echo "<h1>Thank You, $customerName!</h1>";
    echo "<p>Your order has been received and will be delivered soon.</p>";
    echo "<p>It was a delight having you!<br></p>";
    echo "<p>Want to shop again ? Simply click on cart below <br></p>";
    echo '<p> <a href="shop.php">🛒</a></p>';
    ?>
</body>

</html>
