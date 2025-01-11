<?php
// filepath: /c:/xampp/htdocs/reception-system/rooms.php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('img/room1.jpg') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent background */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 100%;
            margin: 50px auto;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .room-description {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        .room-description img {
            width: 150px;
            height: 100px;
            border-radius: 10px;
            margin-right: 20px;
        }

        .guide {
            margin-top: 20px;
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
        }

        .back-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <a href="home.php" class="back-button">Back</a>
    <div class="container">
        <h2>Our Rooms</h2>
        <div class="room-description">
            <img src="img/room1.jpg" alt="Deluxe Room">
            <div>
                <h3>Deluxe Room</h3>
                <p>Our Deluxe Rooms offer a comfortable and luxurious stay with a king-sized bed, modern amenities, and a beautiful view of the city. Perfect for business travelers and couples. Prices start from KES 10,000 per night.</p>
            </div>
        </div>
        <div class="room-description">
            <img src="img/room2.jpg" alt="Executive Suite">
            <div>
                <h3>Executive Suite</h3>
                <p>The Executive Suite provides a spacious living area, a separate bedroom with a king-sized bed, and a fully equipped kitchenette. Ideal for long stays and families. Prices start from KES 15,000 per night.</p>
            </div>
        </div>
        <div class="room-description">
            <img src="img/room3.jpg" alt="Standard Room">
            <div>
                <h3>Standard Room</h3>
                <p>The Standard Room is designed for budget-conscious travelers. It features a queen-sized bed, essential amenities, and a cozy atmosphere. Great for solo travelers and short stays. Prices start from KES 5,000 per night.</p>
            </div>
        </div>
        <div class="guide">
            <h3>How to Book a Room</h3>
            <p>Booking a room with us is simple and convenient. Follow these steps:</p>
            <ol>
                <li>Visit our <a href="guest/guest_login.php">Guest Login</a> page and log in to your account. If you don't have an account, you can <a href="guest/guest_register.php">register here</a>.</li>
                <li>Once logged in, navigate to the "Book a Room" section.</li>
                <li>Select your preferred room type and check the availability for your desired dates.</li>
                <li>Fill in the required details and confirm your booking.</li>
                <li>You will receive a confirmation email with your booking details.</li>
            </ol>
            <p>If you have any questions or need assistance, please <a href="contact.php">contact us</a>.</p>
        </div>
    </div>
</body>
</html>