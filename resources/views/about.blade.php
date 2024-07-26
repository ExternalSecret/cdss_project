<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Clinical Decision Support System (CDSS)</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 960px;
            margin: auto;
            overflow: hidden;
            padding: 0 20px;
        }
        .header, .footer {
            background: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        .header h1, .footer h1 {
            margin: 0;
        }
        .navbar {
            background: #444;
            padding: 10px;
            text-align: right;
        }
        .navbar a {
            color: #fff;
            padding: 14px 20px;
            text-decoration: none;
            display: inline-block;
        }
        .navbar a:hover {
            background: #555;
        }
        .content {
            background: #fff;
            padding: 20px;
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .content h2 {
            text-align: center;
        }
        .content p {
            margin: 20px 0;
        }
        .team {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }
        .team .member {
            background: #f4f4f4;
            margin: 10px;
            padding: 20px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            text-align: center;
            flex: 1;
            max-width: 30%;
            min-width: 200px;
        }
        .team .member img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Clinical Decision Support System (CDSS)</h1>
    </div>

    <nav>
        <div class="navbar">
        <img src="{{ asset('favicon.ico') }}" alt="favicon" class="favicon">
            <ul>
                <li><a href="welcome.blade.php">Home</a></li>
                <li><a href="About.blade.php">About</a></li>
                <li><a href="/help_support/index">Help & Support</a></li>
                <li> <a href="/login">Logout</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="content">
            <h2>About Us</h2>
            <p>Welcome to the Clinical Decision Support System (CDSS). Our mission is to provide healthcare professionals with the tools they need to make better clinical decisions. Our system integrates clinical knowledge, patient information, and other health-related data to enhance decision-making and improve patient outcomes. The rationale underlying the proposed CDSS project is rooted in the imperative to address critical challenges confronting modern healthcare delivery. By equipping healthcare providers with sophisticated decision-making tools, the CDSS aims to mitigate the risk of medical errors, reduce variability in clinical practice, and optimize patient outcomes. Moreover, the implementation of such a system aligns with strategic imperatives aimed at enhancing the quality, safety, and efficiency of healthcare services.
The CDSS relies heavily on accurate and comprehensive patient data. This includes medical history, laboratory results, diagnostic tests, medications, allergies, and any other relevant information. Without reliable data, the system's recommendations may be flawed or incorrect.For the CDSS to access relevant patient data, it needs to be able to interface with various healthcare information systems such as Electronic Health Records (EHR), Laboratory Information Systems (LIS), and Radiology Information Systems (RIS). Interoperability ensures seamless data exchange between different systems.
</p>
            
            <h3>The Vision</h3>
            <p>Our vision is to transform healthcare by providing innovative, evidence-based decision support solutions that empower healthcare providers and improve patient care. Unlike existing CDSS solutions that may be cumbersome to use or lack integration with EHR systems, our solution will prioritize usability and interoperability. By leveraging advanced technologies and focusing on user experience, we aim to address the limitations of existing solutions and provide a more effective tool for healthcare providers.our system offers several key improvements enhanced accuracy and reliability through advanced algorithms and predictive analytics, user-friendly interface designed with input from healthcare professionals to optimize usability and efficiency.
The CDSS will encompass a suite of features designed to address the diverse needs of healthcare providers across various clinical settings. These features relatively include:
<br> Decision Support: Provision of contextually relevant recommendations and alerts based on patient-specific data, clinical guidelines, and best practices.
<br> Medication Management: Identification of potential drug interactions, allergies, and dosage errors to optimize medication prescribing and administration.
<br> Disease Management: Support for the monitoring and management of chronic conditions through personalized care plans and risk assessment tools.
<br> Quality Improvement: Promotion of adherence to clinical protocols and guidelines, thereby enhancing the quality and consistency of care delivery.
</p>
            
            <h3>Our Team</h3>
            <div class="team">
                
                <div class="member">
                    <img src="images/Capture11.PNG" alt="Team Member 1">
                    <h4>Joseph Okpetu</h4>
                    <p>Lead Software Engineer</p>
                </div>
                <div class="member">
                    <img src="images/Capture10.PNG" alt="Team Member 2">
                    <h4>Dr. John Doe (doesnt exist)</h4>
                    <p>Chief Medical Officer</p>
                </div>
                <div class="member">
                    <img src="images/Capture10.PNG" alt="Team Member 3">
                    <h4>Emily Johnson (also doesn't exist)</h4>
                    <p>Data Scientist</p>
                </div>
            </div>
            
            <h3>Contact Us</h3>
            <p>If you have any questions or would like to learn more about our CDSS, please feel free to <a href="/help_support/support_contact">contact us</a>.</p>
        </div>
    </div>

    <div class="footer">
        <h1>&copy; 2024 Clinical Decision Support System by Joseph Okpetu</h1>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>