<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Manual - Clinical Decision Support System</title>
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
        <h1>User Manual</h1>
    </header>
    <main>
        <section id="splashscreen">
            <h2>Splashscreen</h2>
            <p>The splashscreen is the initial screen that users see when they open the website. It contains the logo and a loading animation, preparing the user for the upcoming interface.</p>
        </section>
        <section id="login-page">
            <h2>Login Page</h2>
            <p>After the splashscreen, users are directed to the login page where they enter their credentials (username and password) to access the system. Make sure to keep your credentials secure and do not share them with unauthorized individuals.</p>
        </section>
        <section id="dashboard">
            <h2>Dashboard</h2>
            <p>Upon successful login, users are taken to the dashboard, which serves as the main hub of the CDSS. The dashboard provides an overview of system functionalities and quick access to various sections such as Patient Profiles, Decision Support Tools, and Settings.</p>
        </section>
        <section id="navigation-menu">
            <h2>Navigation Menu</h2>
            <p>From the dashboard, users can access the navigation menu. This menu is the central point for navigating different sections of the CDSS, allowing users to quickly find the tools and information they need.</p>
        </section>
        <section id="patient-profile-page">
            <h2>Patient Profile Page</h2>
            <p>Accessed through the navigation menu, the patient profile page allows users to view and manage patient-specific information. This includes viewing detailed medical history, current health status, and managing patient data.</p>
        </section>
        <section id="alerts-and-reminders">
            <h2>Alerts and Reminders</h2>
            <p>This feature within the patient profile provides important alerts and reminders related to the patient. These alerts may include medication schedules, follow-up appointments, and other critical health notifications.</p>
        </section>
        <section id="patient-profile">
            <h2>Patient Profile</h2>
            <p>The patient profile contains detailed patient information such as medical history and current health status. Users can update patient data and ensure that all information is accurate and up-to-date.</p>
        </section>
        <section id="decision-support-tools">
            <h2>Decision Support Tools</h2>
            <p>This section provides various tools to aid in clinical decision-making. These tools include:</p>
            <div id="drug-interaction-checker">
                <h3>Drug Interaction Checker</h3>
                <p>A tool to check for potential drug interactions. Users can input the medications a patient is taking to identify any harmful interactions.</p>
            </div>
            <div id="dosage-calculator">
                <h3>Dosage Calculator</h3>
                <p>Helps in calculating the correct dosage of medications based on patient-specific factors such as age, weight, and medical condition.</p>
            </div>
            <div id="clinical-guidelines">
                <h3>Clinical Guidelines</h3>
                <p>Provides access to evidence-based clinical guidelines to support healthcare providers in making informed decisions.</p>
            </div>
            <div id="reports">
                <h3>Reports</h3>
                <p>Generates and provides access to various clinical reports. Users can generate reports on patient health, treatment outcomes, and other critical data.</p>
            </div>
        </section>
        <section id="user-settings">
            <h2>User Settings</h2>
            <p>Allows users to customize their experience within the CDSS. The user settings include:</p>
            <div id="profile-info">
                <h3>Profile Info</h3>
                <p>Users can update their personal information such as name, contact details, and password.</p>
            </div>
            <div id="notification-settings">
                <h3>Notification Settings</h3>
                <p>Users can manage their notification preferences, choosing how and when to receive alerts and updates from the CDSS.</p>
            </div>
            <div id="preferences">
                <h3>Preferences</h3>
                <p>Additional settings to personalize the user experience, such as theme settings and interface customization options.</p>
            </div>
        </section>
        <section id="help-and-support">
            <h2>Help and Support</h2>
            <p>Provides resources and support to users. The help and support section includes:</p>
            <div id="faqs">
                <h3>FAQs</h3>
                <p>Frequently asked questions to help users with common issues and queries about the CDSS.</p>
            </div>
            <div id="user-manuals">
                <h3>User Manuals</h3>
                <p>Detailed manuals to guide users through the system's functionalities, including step-by-step instructions and troubleshooting tips.</p>
            </div>
            <div id="help-documentation">
                <h3>Help Documentation</h3>
                <p>Additional help documents for more in-depth assistance with using the CDSS.</p>
            </div>
            <div id="support-contact">
                <h3>Support Contact</h3>
                <p>Information on how to contact support for further help. Users can reach out to the support team for technical assistance and other queries.</p>
            </div>
        </section>
        <section id="system-settings">
            <h2>System Settings</h2>
            <p>Configuration and administrative settings for the system. This section includes:</p>
            <div id="system-settings-general">
                <h3>System Settings</h3>
                <p>General settings to configure the system, such as language preferences, time zone settings, and other system-wide configurations.</p>
            </div>
            <div id="access-control">
                <h3>Access Control</h3>
                <p>Manage user access levels and permissions. Administrators can define roles and control what different users can access and modify within the CDSS.</p>
            </div>
            <div id="permissions">
                <h3>Permissions</h3>
                <p>Detailed settings to control what different users can access and modify within the system. This ensures that sensitive information is protected and only accessible by authorized personnel.</p>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Clinical Decision Support System</p>
    </footer>
</body>
</html>
