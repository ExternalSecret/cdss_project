<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation</title>
    <style>
        .navbar {
            background: linear-gradient(to right, skyblue, darkblue);
            padding: 1em;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            gap: 5em;
        }

        .navbar li {
            display: inline;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        .content {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            margin: 2em 0;
        }

        .favicon {
            width: 32px;
            height: 32px;
        }
    </style>
</head>
<body>
<nav>
        <div class="navbar">
            <img src="{{ asset('favicon.ico') }}" alt="favicon" class="favicon">
            <ul>
                <li><a href="/welcome">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/help_support/index">Help & Support</a></li>
                <li><a href="/help_support/support_contact">Contact</a></li>
                <li> <a href="/login">Logout</a></li>
            </ul>
        </div>
</nav>
    <div class="content">
        <!-- Content goes here -->
    </div>
</body>
</html>