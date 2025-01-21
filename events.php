<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            display: flex;
            min-height: 100vh;
            background-color: #f0f4f8;
        }

        h3 {
            font-size: 1.8rem;
            color: #2c3e50;
        }

        .content-container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            margin-left: 250px;
            flex: 1;
            padding: 30px;
            transition: all 0.3s ease;
        }

        .content, .news-container, .calendar-container, .clock-container {
            flex: 1;
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            min-width: 300px;
        }

        .sidebar {
            width: 250px;
            background-color: #2c3e50;
            color: white;
            padding: 20px;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            box-shadow: 2px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar h2 {
            margin-top: 0;
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: #ecf0f1;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            margin: 15px 0;
        }

        .sidebar ul li a {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            padding: 12px 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .sidebar ul li a:hover {
            background-color: #34495e;
            transform: translateX(10px);
        }

        .sidebar ul li a i {
            margin-right: 15px;
        }

        .event-tabs {
            display: flex;
            margin-bottom: 20px;
        }

        .tab-button {
            flex: 1;
            padding: 10px;
            background-color: #ecf0f1;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .tab-button.active {
            background-color: #3498db;
            color: white;
        }

        .tab-button:hover {
            background-color: #2980b9;
            color: white;
        }

        .event-list {
            display: none;
        }

        .event-list.ongoing {
            display: block;
        }

        .event-card {
            background-color: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .event-card h4 {
            margin-bottom: 10px;
            font-size: 1.5rem;
        }

        .event-card p {
            margin-bottom: 5px;
            color: #2c3e50;
        }

        .news-card {
            background-color: #f9f9f9;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .news-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .news-card h4 {
            font-size: 1.5rem;
            color: #3498db;
            margin-bottom: 10px;
        }

        .news-card p {
            font-size: 1rem;
            color: #2c3e50;
        }

        .calendar {
            text-align: center;
        }

        .calendar-header {
            font-size: 1.8rem;
            color: #3498db;
            margin-bottom: 10px;
        }

        .calendar-days, .calendar-dates {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 5px;
        }

        .calendar-day, .calendar-date {
            padding: 10px;
            background-color: #ecf0f1;
            border-radius: 5px;
            color: #2c3e50;
        }

        .calendar-day {
            font-weight: bold;
            background-color: #3498db;
            color: white;
        }

        .calendar-date:hover {
            background-color: #2980b9;
            cursor: pointer;
            color: white;
        }

        .clock-container {
            margin-top: 20px;
            text-align: center;
        }

        .clock-container h3 {
            color: #3498db;
        }

        .clock-container table {
            width: 100%;
            border-collapse: collapse;
        }

        .clock-container th, .clock-container td {
            font-size: 1.5rem;
            padding: 10px;
        }

        .clock-container th {
            text-align: left;
            color: #2c3e50;
        }

        .clock-container td {
            color: #3498db;
        }

        @media (max-width: 768px) {
            .content-container {
                flex-direction: column;
                margin-left: 0;
            }

            .content, .news-container, .calendar-container, .clock-container {
                min-width: auto;
            }
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>CityHub</h2>
        <ul>
            <li><a href="#" id="home-link"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="#" id="events-link"><i class="fas fa-calendar-alt"></i> Events</a></li>
            <li><a href="#" id="contacts-link"><i class="fas fa-phone-alt"></i> Emergency Contacts</a></li>
            <li><a href="#" id="eco-link"><i class="fas fa-leaf"></i> Eco Tracker</a></li>
            <li><a href="#" id="polls-link"><i class="fas fa-poll"></i> Polls</a></li>
            <li><a href="#" id="logout-link"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
    </div>

    <div class="content-container">
        <div class="content events show">
            <h3>Events</h3>
            <div class="event-tabs">
                <button class="tab-button active" onclick="showTab('ongoing')">Ongoing</button>
                <button class="tab-button" onclick="showTab('upcoming')">Upcoming</button>
            </div>
            <div class="event-list ongoing">
                <div class="event-card">
                    <h4>Revamp Nepal</h4>
                    <p>Sudur Paschim Edition</p>
                    <p>Time: 07:00 PM - 09:00 PM</p>
                    <p>Place: 1st Floor, Hotel Flora</p>
                    <p>Contact: (+977) 9848427685</p>
                </div>
                <div class="event-card">
                    <h4>Community Clean-Up Drive</h4>
                    <p>Organized by: Green Earth Initiative</p>
                    <p>Time: 08:00 AM - 12:00 PM</p>
                    <p>Place: Central Park, Main Entrance</p>
                    <p>Contact: (+977) 9801234567</p>
                </div>
                <div class="event-card">
                    <h4>Floodlit Cricket Series</h4>
                    <p>Organized by: Shikhar Youth Club</p>
                    <p>Time: 11:00 AM - 2:00 PM</p>
                    <p>Place: Suneri Park, Entrance </p>
                    <p>Contact: (+977) 9801433567</p>
                </div>
            </div>
            <div class="event-list upcoming" style="display: none;">
                <div class="event-card">
                    <h4>Design System</h4>
                    <p>ESDev Design</p>
                    <p>Time: 06:30 PM - 10:00 PM</p>
                    <p>Place: 3rd Floor, Creative House</p>
                    <p>Contact: (+977) 9862575413</p>
                </div>
                <div class="event-card">
                    <h4>Tech Fest</h4>
                    <p>ESDev Design</p>
                    <p>Time: 10:30 PM - 1:00 PM</p>
                    <p>Place: 2rd Floor, Urja Plaza</p>
                    <p>Contact: (+977) 9862575413</p>
                </div>
            </div>
        </div>

        <div class="news-container">
            <h3>News</h3>
            <div class="news-card">
                <h4>City Library Introduces Free Workshops</h4>
                <p>The City Library is now offering free workshops on creative writing, coding, and digital skills for all age groups. <a href="#">Read more</a></p>
            </div>
            <div class="news-card">
                <h4>Local Farmer's Market Expands</h4>
                <p>The weekly farmer's market now includes more vendors and a wider selection of organic produce and handmade goods. <a href="#">Read more</a></p>
            </div>
            <div class="news-card">
                <h4>New Bike Lanes in Downtown</h4>
                <p>The city has unveiled new bike lanes to improve safety and promote eco-friendly transportation in the downtown area. <a href="#">Read more</a></p>
            </div>
            <div class="news-card">
                <h4>City Government to Launch New Public Park</h4>
                <p>The city government is set to launch a new public park next month in central City. The park will have walking trails, gardens, and a lake. <a href="#">Read more</a></p>
            </div>
        </div>

        <!-- Calendar and Clock Section -->
        <div style="flex: 1; display: flex; flex-direction: column; gap: 20px;">
            <div class="calendar-container">
                <div class="calendar">
                    <h3 class="calendar-header">January 2025</h3>
                    <div class="calendar-days">
                        <div class="calendar-day">Sun</div>
                        <div class="calendar-day">Mon</div>
                        <div class="calendar-day">Tue</div>
                        <div class="calendar-day">Wed</div>
                        <div class="calendar-day">Thu</div>
                        <div class="calendar-day">Fri</div>
                        <div class="calendar-day">Sat</div>
                    </div>
                    <div class="calendar-dates">
                        <div class="calendar-date">1</div>
                        <div class="calendar-date">2</div>
                        <div class="calendar-date">3</div>
                        <div class="calendar-date">4</div>
                        <div class="calendar-date">5</div>
                        <div class="calendar-date">6</div>
                        <div class="calendar-date">7</div>
                        <div class="calendar-date">8</div>
                        <div class="calendar-date">9</div>
                        <div class="calendar-date">10</div>
                        <div class="calendar-date">11</div>
                        <div class="calendar-date">12</div>
                        <div class="calendar-date">13</div>
                        <div class="calendar-date">14</div>
                        <div class="calendar-date">15</div>
                        <div class="calendar-date">16</div>
                        <div class="calendar-date">17</div>
                        <div class="calendar-date">18</div>
                        <div class="calendar-date">19</div>
                        <div class="calendar-date">20</div>
                        <div class="calendar-date">21</div>
                        <div class="calendar-date">22</div>
                        <div class="calendar-date">23</div>
                        <div class="calendar-date">24</div>
                        <div class="calendar-date">25</div>
                        <div class="calendar-date">26</div>
                        <div class="calendar-date">27</div>
                        <div class="calendar-date">28</div>
                        <div class="calendar-date">29</div>
                        <div class="calendar-date">30</div>
                        <div class="calendar-date">31</div>
                    </div>
                </div>
            </div>

            <!-- Clock Container -->
            <div class="clock-container">
                <h3>Date and Time</h3>
                <div>
                    <table>
                        <tr>
                            <th>Day</th>
                            <td id="current-day">Monday</td>
                        </tr>
                        <tr>
                            <th>Date</th>
                            <td id="current-date">January 15, 2025</td>
                        </tr>
                        <tr>
                            <th>Time</th>
                            <td id="current-time">00:00:00</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showTab(tabName) {
            const tabs = document.querySelectorAll('.event-list');
            tabs.forEach(tab => {
                if (tab.classList.contains(tabName)) {
                    tab.style.display = 'block';
                } else {
                    tab.style.display = 'none';
                }
            });

            const buttons = document.querySelectorAll('.tab-button');
            buttons.forEach(button => {
                button.classList.remove('active');
            });

            document.querySelector(`.tab-button[onclick="showTab('${tabName}')"]`).classList.add('active');
        }

        function updateDateTime() {
            const now = new Date();
            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const seconds = String(now.getSeconds()).padStart(2, '0');
            const timeString = `${hours}:${minutes}:${seconds}`;
            const options = { year: 'numeric', month: 'long', day: 'numeric' };
            const dateString = now.toLocaleDateString(undefined, options);
            const dayString = now.toLocaleDateString(undefined, { weekday: 'long' });

            document.getElementById('current-time').textContent = timeString;
            document.getElementById('current-date').textContent = dateString;
            document.getElementById('current-day').textContent = dayString;
        }

        setInterval(updateDateTime, 1000);
        updateDateTime();
    </script>
</body>
</html>