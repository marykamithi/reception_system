<?php
session_start();
include('../db_connection.php');

// Check if the user is logged in as a guest
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'guest') {
    header("Location: guest_login.php");
    exit();
}

$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['service'])) {
    $username = $_SESSION['username'];
    $service = $_POST['service'];

    $sql = "INSERT INTO service_requests (username, service) VALUES ('$username', '$service')";

    if ($conn->query($sql) === TRUE) {
        $message = "Your request for $service has been received. We will attend to it shortly. Thank you!";
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Services</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('../img/inroom.jpg') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9); /* Semi-transparent background */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 100%;
            margin: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .service {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .service img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 10px 0 0 10px;
        }

        .service div {
            padding: 20px;
            flex: 1;
        }

        .service h3 {
            margin-top: 0;
            color: #007BFF;
        }

        .service p {
            margin: 5px 0;
            color: #555;
        }

        .buttons {
            margin-top: 10px;
        }

        .buttons button {
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .buttons button:hover {
            background-color: #0056b3;
        }

        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
            background-color: #007BFF;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .back-button:hover {
            background-color: #0056b3;
        }

        .message {
            text-align: center;
            margin-bottom: 20px;
            color: green;
            font-size: 18px;
            font-weight: bold;
        }

        .error-message {
            text-align: center;
            margin-bottom: 20px;
            color: red;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <a href="guest_home.php" class="back-button">Back</a>
    <div class="container">
        <h2>Welcome to Our Hotel Services</h2>

        <?php if ($message) { ?>
            <div class="<?php echo strpos($message, 'received') !== false ? 'message' : 'error-message'; ?>"><?php echo $message; ?></div>
        <?php } ?>

        <div class="service">
            <img src="../img/inroom.jpg" alt="In-Room Dining">
            <div>
                <h3>In-Room Dining</h3>
                <p>Our in-room dining service offers a wide range of delicious meals and beverages delivered straight to your room. Whether you're craving a hearty breakfast, a light lunch, or a gourmet dinner, our menu has something for everyone. Enjoy the convenience of dining in the comfort of your room at any time of the day or night. Prices start from KES 1,500.</p>
                <div class="buttons">
                    <form method="post" action="">
                        <input type="hidden" name="service" value="In-Room Dining">
                        <button type="submit">Request</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="service">
            <img src="../img/housekeeping.jpg" alt="Housekeeping">
            <div>
                <h3>Housekeeping</h3>
                <p>Our housekeeping team is dedicated to ensuring your room is always clean and comfortable. We offer daily cleaning services, including bed making, towel replacement, and bathroom cleaning. If you need any additional amenities or special requests, our housekeeping staff is always ready to assist you. Prices start from KES 500 per day.</p>
                <div class="buttons">
                    <form method="post" action="">
                        <input type="hidden" name="service" value="Housekeeping">
                        <button type="submit">Request</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="service">
            <img src="../img/laundry.jpg" alt="Laundry Service">
            <div>
                <h3>Laundry Service</h3>
                <p>Our laundry service provides convenient and efficient cleaning for your clothes. Simply place your laundry in the provided bag and leave it in your room. Our team will pick it up, clean it, and return it to you fresh and neatly folded. We offer same-day service for your convenience. Prices start from KES 200 per item.</p>
                <div class="buttons">
                    <form method="post" action="">
                        <input type="hidden" name="service" value="Laundry Service">
                        <button type="submit">Request</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="service">
            <img src="../img/concierge.jpg" alt="Concierge Service">
            <div>
                <h3>Concierge Service</h3>
                <p>Our concierge service is here to make your stay as enjoyable and stress-free as possible. Whether you need assistance with booking tickets, arranging transportation, or finding local attractions, our knowledgeable concierge staff is here to help. We can also provide recommendations for dining, shopping, and entertainment in the area. This service is complimentary.</p>
                <div class="buttons">
                    <form method="post" action="">
                        <input type="hidden" name="service" value="Concierge Service">
                        <button type="submit">Request</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="service">
            <img src="../img/wakeup.jpg" alt="Wake-Up Call Service">
            <div>
                <h3>Wake-Up Call Service</h3>
                <p>Never miss an important appointment or early morning flight with our wake-up call service. Simply let us know your preferred wake-up time, and our staff will ensure you receive a timely and friendly wake-up call. Start your day on the right foot with our reliable wake-up call service. This service is complimentary.</p>
                <div class="buttons">
                    <form method="post" action="">
                        <input type="hidden" name="service" value="Wake-Up Call Service">
                        <button type="submit">Request</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="service">
            <img src="../img/minibar.jpg" alt="Mini-Bar">
            <div>
                <h3>Mini-Bar</h3>
                <p>Our mini-bar is stocked with a variety of snacks and beverages for your enjoyment. Whether you're in the mood for a refreshing drink or a quick snack, our mini-bar has you covered. Items are replenished daily, and charges will be added to your room bill for your convenience. Prices vary by item, starting from KES 100.</p>
                <div class="buttons">
                    <form method="post" action="">
                        <input type="hidden" name="service" value="Mini-Bar">
                        <button type="submit">Request</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
$conn->close();
?>