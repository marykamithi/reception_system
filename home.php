<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url('img/reception.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Header Styles */
        header {
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        header h1 {
            margin: 0;
            font-family: 'Pacifico', cursive;
            font-size: 1.5em;
        }

        header a {
            color: white;
            text-decoration: none;
        }

        /* Navigation Bar Styles */
        nav {
            display: flex;
            gap: 10px; /* Reduced gap for better fit */
            align-items: center;
            justify-content: flex-end; /* Align items to the right */
            margin-right: 20px; /* Add some margin to move away from the edge */
        }

        nav a {
            color: white;
            padding: 14px 20px;
            text-decoration: none;
            text-align: center;
        }

        nav a:hover {
            background-color: #575757;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: rgba(0, 0, 0, 0.9); /* Darker background for better contrast */
            min-width: 200px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #575757;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #575757;
        }

        /* Main Content Styles */
        .main-content {
            text-align: center;
            padding: 50px;
            background-color: rgba(255, 255, 255, 0.6); /* More transparent */
            margin: 50px auto;
            max-width: 1200px;
            border-radius: 10px;
            flex-grow: 1;
        }

        .columns {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            margin-top: 20px;
        }

        .column {
            flex: 1;
            background-color: rgba(255, 255, 255, 0.5); /* More transparent */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .buttons {
            margin-top: 20px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px 5px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #0056b3;
        }

        /* Footer Styles */
        footer {
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            text-align: center;
            padding: 10px 0;
            font-size: 0.9em;
            margin-top: auto;
        }

        footer p {
            margin: 5px 0;
        }

        footer a {
            color: white;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a href="home.php"><h1>Reception System</h1></a>
        <nav>
            <div class="dropdown">
                <button class="dropbtn">Login</button>
                <div class="dropdown-content">
                    <a href="staff/staff_login.php">Staff Login</a>
                    <a href="guest/guest_login.php">Guest Login</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Register</button>
                <div class="dropdown-content">
                    <a href="staff/staff_register.php">Staff Register</a>
                    <a href="guest/guest_register.php">Guest Register</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Services</button>
                <div class="dropdown-content">
                    <a href="rooms.php">Rooms</a>
                    <a href="room_service.php">Room Service</a>
                </div>
            </div>
        </nav>
    </header>
    <div class="main-content">
        <h2>Welcome to the Reception System</h2>
        <p>Our reception system is designed to provide seamless services for both staff and clients. We aim to make your experience smooth and efficient.</p>
        <div class="columns">
            <div class="column">
                <h3>For Staff</h3>
                <p>Staff members can log in to manage client requests, view reports, and handle room bookings. Our system ensures that all operations are streamlined and efficient.</p>
            </div>
            <div class="column">
                <h3>For Guests</h3>
                <p>Guests can log in to book rooms, request room services, and manage their bookings. Our user-friendly interface makes it easy for guests to access all the services they need.</p>
            </div>
            <div class="column">
                <h3>Contact Us</h3>
                <p>If you have any questions or need assistance, feel free to contact us. Our support team is always ready to help you with any issues or inquiries you may have.</p>
            </div>
        </div>
    </div>
    <footer>
        <p>&copy; 2025 Reception System</p>
        <p><a href="staff/staff_login.php">Staff Login</a> | <a href="guest/guest_login.php">Guest Login</a> </p>
        <p>Contact us: 1234567890</p>
        <p>Email: reception@gmail.com</p>
    </footer>
</body>
</html>