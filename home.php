<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - MyCity Hub</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* General Styling */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            color: #2c3e50;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #f4f4f9;
        }

        .container {
            display: flex;
            flex: 1;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 280px;
            height: 100vh;
            background-color: #374785;
            color: #fff;
            box-shadow: 4px 0 10px rgba(0, 0, 0, 0.2);
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px 0;
        }

        .sidebar h2 {
            margin-bottom: 20px;
            font-size: 22px;
            font-weight: 600;
            text-transform: uppercase;
            text-align: center;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
            width: 100%;
            text-align: left;
        }

        .sidebar ul li {
            margin: 15px 0;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: #dfe6e9;
            font-size: 16px;
            padding: 12px 25px;
            display: block;
            border-radius: 8px;
            transition: 0.3s;
        }

        .sidebar ul li a:hover {
            background: #FFD700;
            color: #374785;
        }

        .main-content {
            margin-left: 280px;
            padding: 20px;
            flex: 1;
            overflow-y: auto;
        }

        .card-list {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .card {
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        .card img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            flex-shrink: 0;
        }

        .card-content {
            padding: 20px;
            flex: 1;
        }

        .card-content h2 {
            font-size: 20px;
            color: #374785;
            margin-bottom: 10px;
        }

        .card-content p {
            font-size: 14px;
            color: #7f8c8d;
            margin-bottom: 20px;
        }

        .card-content .cta-button {
            text-decoration: none;
            background: #FFD700;
            color: #374785;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        .card-content .cta-button:hover {
            background: #374785;
            color: #FFD700;
        }

        footer {
            text-align: center;
            background: #374785;
            color: #fff;
            padding: 10px 0;
            margin-top: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <h2>MyCity Hub</h2>
            <nav>
                <ul>
                    <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="#"><i class="fas fa-star"></i> Features</a></li>
                    <li><a href="#"><i class="fas fa-poll"></i> Polls</a></li>
                    <li><a href="#"><i class="fas fa-calendar-alt"></i> Events</a></li>
                    <li><a href="#"><i class="fas fa-phone"></i> Emergency Contacts</a></li>
                    <li><a href="#"><i class="fas fa-user"></i> Profile</a></li>
                    <li><a href="#"><i class="fas fa-cog"></i> Settings</a></li>
                    <li><a href="#"><i class="fas fa-info-circle"></i> About Us</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <section class="card-list">
                <div class="card">
                    <img src="https://via.placeholder.com/150" alt="Updates">
                    <div class="card-content">
                        <h2>City Updates</h2>
                        <p>Stay informed about the latest happenings in your city. Don't miss important updates!</p>
                        <a href="#" class="cta-button">Learn More</a>
                    </div>
                </div>
                <div class="card">
                    <img src="https://via.placeholder.com/150" alt="Events">
                    <div class="card-content">
                        <h2>Upcoming Events</h2>
                        <p>Check out what's happening around you. Explore events and participate actively!</p>
                        <a href="#" class="cta-button">View Events</a>
                    </div>
                </div>
                <div class="card">
                    <img src="https://via.placeholder.com/150" alt="Polls">
                    <div class="card-content">
                        <h2>Participate in Polls</h2>
                        <p>Share your opinions and contribute to city decisions by participating in polls.</p>
                        <a href="#" class="cta-button">Take a Poll</a>
                    </div>
                </div>
                <div class="card">
                    <img src="https://via.placeholder.com/150" alt="Emergency">
                    <div class="card-content">
                        <h2>Emergency Contacts</h2>
                        <p>Quickly access emergency numbers and get help when you need it most.</p>
                        <a href="#" class="cta-button">Get Help</a>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <footer>
        <p>&copy; 2025 MyCity Hub. All rights reserved.</p>
    </footer>
</body>
</html>
