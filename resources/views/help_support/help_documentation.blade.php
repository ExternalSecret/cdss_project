    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help Documentation</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        header {
            background:  linear-gradient(to right, skyblue, darkblue);
            color: #fff;
            padding-top: 30px;
            min-height: 70px;
            border-bottom: #77a7ff 3px solid;
        }
        header a {
            color: #fff;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 16px;
        }
        header ul {
            padding: 0;
            list-style: none;
        }
        header li {
            float: left;
            display: inline;
            padding: 0 20px 0 20px;
        }
        header #branding {
            float: left;
        }
        header #branding h1 {
            margin: 0;
        }
        header nav {
            float: right;
            margin-top: 10px;
        }
        section {
            padding: 20px;
            margin: 20px 0;
            background: #fff;
            border: #ccc 1px solid;
        }
        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 30px 0;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Help Documentation</h1>
    </header>
    <main>
        <section id="splashscreen">
            <h2>Splashscreen</h2>
            <p>This is the initial screen that users see when they open the website. It likely contains the logo and a loading animation.</p>
        </section>
        <section id="login-page">
            <h2>Login Page</h2>
            <p>After the splash screen, users are directed to the login page where they enter their credentials to access the system.</p>
        </section>
        <section id="dashboard">
            <h2>Dashboard</h2>
            <p>Upon successful login, users are taken to the dashboard, which serves as the main hub of the CDSS. It provides an overview and quick access to various functionalities.</p>
        </section>
        <section id="navigation-menu">
            <h2>Navigation Menu</h2>
            <p>From the dashboard, users can access the navigation menu, which is the central point for navigating different sections of the CDSS.</p>
        </section>
        <section id="patient-profile-page">
            <h2>Patient Profile Page</h2>
            <p>Accessed through the patient profile page, this section allows users to view and manage patient-specific information.</p>
        </section>
        <section id="alerts-and-reminders">
            <h2>Alerts and Reminders</h2>
            <p>A feature within the patient profile that provides important alerts and reminders related to the patient.</p>
        </section>
        <section id="patient-profile">
            <h2>Patient Profile</h2>
            <p>Contains detailed patient information such as medical history and current health status.</p>
            <div id="decision-support-tools">
                <h3>Decision Support Tools</h3>
                <ul>
                    <li><a href="#drug-interaction-checker">Drug Interaction Checker</a></li>
                    <li><a href="#dosage-calculator">Dosage Calculator</a></li>
                    <li><a href="#clinical-guidelines">Clinical Guidelines</a></li>
                    <li><a href="#reports">Reports</a></li>
                </ul>
            </div>
        </section>
        <section id="drug-interaction-checker">
            <h2>Drug Interaction Checker</h2>
            <p>A tool to check for potential drug interactions.</p>
        </section>
        <section id="dosage-calculator">
            <h2>Dosage Calculator</h2>
            <p>Helps in calculating the correct dosage of medications.</p>
        </section>
        <section id="clinical-guidelines">
            <h2>Clinical Guidelines</h2>
            <p>Provides access to evidence-based clinical guidelines.</p>
        </section>
        <section id="reports">
            <h2>Reports</h2>
            <p>Generates and provides access to various clinical reports.</p>
        </section>
        <section id="user-settings">
            <h2>User Settings</h2>
            <div id="profile-info">
                <h3>Profile Info</h3>
                <p>Users can update their personal information.</p>
            </div>
            <div id="notification-settings">
                <h3>Notification Settings</h3>
                <p>Users can manage their notification preferences.</p>
            </div>
            <div id="preferences">
                <h3>Preferences</h3>
                <p>Additional settings to personalize the user experience.</p>
            </div>
        </section>
        <section id="help-and-support">
            <h2>Help and Support</h2>
            <div id="faqs">
                <h3>FAQs</h3>
                <p>Frequently asked questions to help users with common issues.</p>
            </div>
            <div id="user-manuals">
                <h3>User Manuals</h3>
                <p>Detailed manuals to guide users through the system's functionalities.</p>
            </div>
            <div id="help-documentation">
                <h3>Help Documentation</h3>
                <p>Additional help documents for more in-depth assistance.</p>
            </div>
            <div id="support-contact">
                <h3>Support Contact</h3>
                <p>Information on how to contact support for further help.</p>
            </div>
        </section>
        <section id="system-settings">
            <h2>System Settings</h2>
            <div id="system-settings-general">
                <h3>System Settings</h3>
                <p>General settings to configure the system.</p>
            </div>
            <div id="access-control">
                <h3>Access Control</h3>
                <p>Manage user access levels and permissions.</p>
            </div>
            <div id="permissions">
                <h3>Permissions</h3>
                <p>Detailed settings to control what different users can access and modify within the system.</p>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Clinical Decision Support System</p>
    </footer>
</body>
</html>