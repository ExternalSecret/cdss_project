<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        html, body {
            background-color: #f0f0f0; /* Grey-ish white background */
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .container {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        #header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: linear-gradient(to right, skyblue, green);
            padding: 1em;
        }

        .brand-name h1 {
            margin: 0;
        }

        .bar-icon-container img {
            height: 40px;
        }

        .navigation ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            gap: 2em;
        }

        .navigation li {
            display: inline;
        }

        .navigation a {
            color: #ecf0f1;
            text-decoration: none;
            font-weight: bold;
        }

        main {
            flex: 1;
            padding: 2em;
        }

        footer {
            background-color: #e6f7ff; /* Pale blue background */
            padding: 1em;
            text-align: center;
        }

        .form-group {
            margin-bottom: 1em;
        }

        .form-control {
            width: 100%;
            padding: 0.5em;
            margin-top: 0.5em;
        }

        button {
            padding: 0.7em 1.5em;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        #upcomingReminders, #pastReminders {
            margin-top: 20px;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        #upcomingList, #pastList {
            list-style-type: none;
            padding: 0;
        }

        #upcomingList li, #pastList li {
            margin-bottom: 10px;
            padding: 10px;
            background-color: #ecf0f1; /* Light gray background for list items */
            border-radius: 4px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <title>Reminders</title>
</head>
<body>
    <div class="container">
        <header id="header">
            <div class="brand-name">
                <h1>Appointments</h1>
            </div>
            <div class="bar-icon-container">
                <img src="{{ asset('images/bar.png') }}" alt="">
            </div>
            <nav class="navigation">
                <ul class="">
                    <li><a href="{{ route('welcome') }}">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/help_support.support_contact">Contact</a></li>
                    <li><a href="/help_support.index">Help & Support</a></li>
                    <li><a href="/login">Logout</a></li>
                </ul>
            </nav>
        </header>
    
    <main>
        <section>
            <h2>Reminders</h2>
            <p>Set your medicine reminders below:</p>

            <!-- Reminder Form -->
            <form id="reminderForm" method="POST" action="{{ route('reminders.store') }}">
                @csrf
                <p><h3>Create New Reminder</h3></p>
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="consultancy">Consultancy</label>
                    <select class="form-control" id="consultancy" name="consultancy" required>
                        <option value="Primary Care">Primary Care</option>
                        <option value="Internal Medicine">Internal Medicine</option>
                        <option value="Pediatrics">Pediatrics</option>
                        <option value="Geriatrics">Geriatrics</option>
                        <option value="Obstetrics and Gynecology">Obstetrics and Gynecology</option>
                        <option value="Emergency Medicine">Emergency Medicine</option>
                        <option value="Public Health">Public Health</option>
                        <option value="Sports Medicine">Sports Medicine</option>
                        <option value="Occupational Medicine">Occupational Medicine</option>
                    </select>
                </div>
                <button type="submit">Set Reminder</button>
            </form>

            <!-- Display Upcoming Reminders -->
            <div id="upcomingReminders">
                <h3>Upcoming Reminders</h3>
                <ul id="upcomingList"></ul>
            </div>

            <!-- Display Past Reminders -->
            <div id="pastReminders">
                <h3>Past Reminders</h3>
                <ul id="pastList"></ul>
            </div>
        </section>
    </main>
    <footer>
        <div class="copyright">
            <p>Copyright 2024 || All Rights Reserved</p>
            <p>Joseph Okpetu's Project</p>
        </div>
    </footer>

    <script>
        $(document).ready(function () {
            // Handle form submission
            $("#reminderForm").submit(function (event) {
                event.preventDefault();

                // Get user inputs
                var date = $("#date").val();
                var name = $("#name").val();
                var consultancy = $("#consultancy").val();

                // Create a new list item for the reminder
                var listItem = $("<li>").text(`${date} - ${name} - ${consultancy}`);

                // Check if the reminder is in the past or upcoming
                var currentTime = new Date();
                var reminderDateTime = new Date(date);

                if (reminderDateTime > currentTime) {
                    // Upcoming reminder
                    $("#upcomingList").append(listItem);
                } else {
                    // Past reminder
                    $("#pastList").append(listItem);
                }

                // Clear the form inputs
                $("#date").val("");
                $("#name").val("");
                $("#consultancy").val("");
            });
        });
    </script>
</body>
</html>