<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events and Notices - Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* General Styles */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: #f9f9f9;
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar Styles */
        .sidebar {
            width: 260px;
            background: #2c3e50;
            color: #fff;
            position: fixed;
            height: 100vh;
            overflow-y: auto;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.2);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .sidebar h2 {
            text-align: center;
            font-size: 22px;
            margin: 20px 0;
            color: #FFD700;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar ul li {
            margin: 15px 0;
        }

        .sidebar ul li a {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: #fff;
            font-size: 16px;
            padding: 10px 20px;
            transition: all 0.3s;
        }

        .sidebar ul li a:hover {
            background: #34495e;
            color: #FFD700;
        }

        .sidebar ul li a i {
            margin-right: 15px;
        }

        .sidebar .footer {
            text-align: center;
            font-size: 14px;
            padding: 10px;
            background: #1a252f;
            color: #aaa;
        }

        .sidebar .footer a {
            color: #FFD700;
            text-decoration: none;
        }

        .sidebar .footer a:hover {
            text-decoration: underline;
        }

        /* Main Content Styles */
        .main-content {
            margin-left: 260px;
            padding: 20px;
            width: calc(100% - 260px);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #2c3e50;
        }

        .categories {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 20px;
        }

        /* Card Design */
        .card {
            flex: 1;
            min-width: 280px;
            max-width: 400px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .card-content {
            padding: 20px;
        }

        .card-content h2 {
            font-size: 20px;
            margin-bottom: 10px;
            color: #2c3e50;
        }

        .card-content p {
            font-size: 16px;
            line-height: 1.5;
            margin-bottom: 10px;
            color: #555;
        }

        .card-content .date {
            font-size: 14px;
            color: #888;
            margin-bottom: 10px;
        }

        .card-content .category {
            display: inline-block;
            background: #FFD700;
            color: #333;
            font-size: 14px;
            padding: 5px 10px;
            border-radius: 5px;
            text-transform: uppercase;
        }

        .view-more {
            text-align: center;
            margin: 20px 0;
        }

        .view-more a {
            text-decoration: none;
            font-size: 16px;
            color: #2c3e50;
            font-weight: bold;
        }

        .view-more a:hover {
            color: #FFD700;
        }
        /* Notice Section */
        .notices {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            padding: 20px;
        }

        .notices h2 {
            font-size: 22px;
            color: #374785;
            margin-bottom: 15px;
        }

        .notices ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .notices ul li {
            margin-bottom: 10px;
            font-size: 16px;
            color: #555;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .notices ul li i {
            color: #FFD700;
            font-size: 18px;
        }

        .notices ul li a {
            text-decoration: none;
            color: #374785;
        }

        .notices ul li a:hover {
            text-decoration: underline;
            color: #FFD700;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Stay Connected and Updated</h2>
        <ul>
            <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="#"><i class="fas fa-calendar-alt"></i> Events</a></li>
            <li><a href="#"><i class="fas fa-poll"></i> Polls</a></li>
            <li><a href="#"><i class="fas fa-phone"></i> Emergency Contacts</a></li>
            <li><a href="#"><i class="fas fa-user"></i> Profile</a></li>
            <li><a href="#"><i class="fas fa-cog"></i> Settings</a></li>
            <li><a href="#"><i class="fas fa-info-circle"></i> About Us</a></li>
        </ul>
        <div class="footer">
            <p>Powered by <a href="#">MyCityHUb</a></p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <h1>Events and Notices</h1>

        <!-- Events Section -->
        <section class="events">
            <h2>Upcoming Events</h2>
            <div class="categories">
                <!-- Event Card 1 -->
                <div class="card">
                    <img src="https://via.placeholder.com/400x200" alt="Event Image">
                    <div class="card-content">
                        <h2>Music Festival</h2>
                        <span class="date">Date: January 15, 2025</span>
                        <span class="category">Entertainment</span>
                        <p>Join us for an evening filled with music, food, and fun at the annual music festival held in City Park.</p>
                    </div>
                </div>
                <!-- Event Card 2 -->
                <div class="card">
                    <img src="https://via.placeholder.com/400x200" alt="Event Image">
                    <div class="card-content">
                        <h2>Blood Donation Camp</h2>
                        <span class="date">Date: January 20, 2025</span>
                        <span class="category">Social Cause</span>
                        <p>Help save lives by participating in the blood donation camp at Community Hall.</p>
                    </div>
                </div>
                <!-- Event Card 3 -->
                <div class="card">
                    <img src="https://via.placeholder.com/400x200" alt="Event Image">
                    <div class="card-content">
                        <h2>Sports Meet</h2>
                        <span class="date">Date: February 5, 2025</span>
                        <span class="category">Sports</span>
                        <p>Show your athletic skills and team spirit by participating in the annual sports meet.</p>
                    </div>
                </div>
                <!-- Event Card 4 -->
                <div class="card">
                    <img src="https://via.placeholder.com/400x200" alt="Event Image">
                    <div class="card-content">
                        <h2>Art Exhibition</h2>
                        <span class="date">Date: March 10, 2025</span>
                        <span class="category">Art</span>
                        <p>Discover local talent and enjoy amazing artwork at the city art gallery.</p>
                    </div>
                </div>
            </div>
             <!-- Notices Section -->
        <section class="notices">
            <h2>Latest Notices</h2>
            <ul>
                <li><i class="fa fa-bullhorn"></i> <a href="#">Emergency Water Supply Notice (Jan 2025)</a></li>
                <li><i class="fa fa-info-circle"></i> <a href="#">City Electricity Maintenance Schedule</a></li>
                <li><i class="fa fa-calendar"></i> <a href="#">Public Meeting on Community Safety - Feb 2025</a></li>
                <li><i class="fa fa-leaf"></i> <a href="#">Recycling Collection Updates for 2025</a></li>
                <li><i class="fa fa-flag"></i> <a href="#">Election Poll Notice and Guidelines</a></li>
            </ul>
        </section>

        </section>

        <div class="view-more">
            <a href="#">View All Events and Notices</a>
        </div>
    </div>
</body>
</html>
