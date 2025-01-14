<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emergency Contacts - MyCityHub</title>
    <link rel="stylesheet" href="emergency.css"> <!-- Link to the existing CSS file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Font Awesome for icons -->
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <h2>MyCity Hub</h2>
            <nav>
                <ul>
                    <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="features.php"><i class="fas fa-star"></i> Features</a></li>
                    <li><a href="polls.php"><i class="fas fa-poll"></i> Polls</a></li>
                    <li><a href="events.php"><i class="fas fa-calendar-alt"></i> Events</a></li>
                    <li><a href="emergency_contacts.php"><i class="fas fa-phone"></i> Emergency Contacts</a></li>
                    <li><a href="profile.php"><i class="fas fa-user"></i> Profile</a></li>
                    <li><a href="settings.php"><i class="fas fa-cog"></i> Settings</a></li>
                    <li><a href="about.php"><i class="fas fa-info-circle"></i> About Us</a></li>
                </ul>
            </nav>
        </aside>

        <main>
            <h1>Emergency Contacts</h1>
            <div class="emergency-table-container">
                <table class="emergency-table">
                    <thead>
                        <tr>
                            <th>Service</th>
                            <th>Contact Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="ambulance">
                            <td>Ambulance</td>
                            <td>102</td>
                        </tr>
                        <tr class="fire">
                            <td>Fire Brigade</td>
                            <td>101</td>
                        </tr>
                        <tr class="police">
                            <td>Police</td>
                            <td>100</td>
                        </tr>
                        <tr class="traffic-police">
                            <td>Traffic Police</td>
                            <td>103</td>
                        </tr>
                        <tr class="women-help">
                            <td>Women Help Line</td>
                            <td>114</td>
                        </tr>
                        <tr class="child-help">
                            <td>Child Help Line</td>
                            <td>1098</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <footer>
        <p>&copy; 2025 MyCityHub. All rights reserved.</p>
    </footer>
</body>
</html>
