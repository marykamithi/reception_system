<?php
// filepath: /c:/xampp/htdocs/reception-system/room_service.php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Service</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('img/inroom.jpg') no-repeat center center fixed;
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

        .service-description {
            margin-bottom: 20px;
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
        <h2>Room Service</h2>
        <div class="service-description">
            <h3>In-Room Dining</h3>
            <p>Our in-room dining service offers a wide range of delicious meals and beverages delivered straight to your room. Whether you're craving a hearty breakfast, a light lunch, or a gourmet dinner, our menu has something for everyone. Enjoy the convenience of dining in the comfort of your room at any time of the day or night. Prices start from KES 1,500.</p>
        </div>
        <div class="service-description">
            <h3>Housekeeping</h3>
            <p>Our housekeeping team is dedicated to ensuring your room is always clean and comfortable. We offer daily cleaning services, including bed making, towel replacement, and bathroom cleaning. If you need any additional amenities or special requests, our housekeeping staff is always ready to assist you. Prices start from KES 500 per day.</p>
        </div>
        <div class="service-description">
            <h3>Laundry Service</h3>
            <p>Our laundry service provides convenient and efficient cleaning for your clothes. Simply place your laundry in the provided bag and leave it in your room. Our team will pick it up, clean it, and return it to you fresh and neatly folded. We offer same-day service for your convenience. Prices start from KES 200 per item.</p>
        </div>
        <div class="service-description">
            <h3>Concierge Service</h3>
            <p>Our concierge service is here to make your stay as enjoyable and stress-free as possible. Whether you need assistance with booking tickets, arranging transportation, or finding local attractions, our knowledgeable concierge staff is here to help. We can also provide recommendations for dining, shopping, and entertainment in the area. This service is complimentary.</p>
        </div>
        <div class="service-description">
            <h3>Wake-Up Call Service</h3>
            <p>Never miss an important appointment or early morning flight with our wake-up call service. Simply let us know your preferred wake-up time, and our staff will ensure you receive a timely and friendly wake-up call. Start your day on the right foot with our reliable wake-up call service. This service is complimentary.</p>
        </div>
        <div class="service-description">
            <h3>Mini-Bar</h3>
            <p>Our mini-bar is stocked with a variety of snacks and beverages for your enjoyment. Whether you're in the mood for a refreshing drink or a quick snack, our mini-bar has you covered. Items are replenished daily, and charges will be added to your room bill for your convenience. Prices vary by item, starting from KES 100.</p>
        </div>
    </div>
</body>
</html>