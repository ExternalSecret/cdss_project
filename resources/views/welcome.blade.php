<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctors Portal | Home</title>
    <!--********** External css file links start  **********-->
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./mobile.css">
    <!--********** External css file links end  **********-->

    <!--********** Google font link start  **********-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <!--********** Google font link end  **********-->
    <style>
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style-type: none;
            text-decoration: none;
        }

        :root {
            --first-color: #3a4256;
            --second-color: #19d3ae;
            --third-color: #0fcfec;
            --font-size: 16px;
        }

        .container {
            max-width: 1440px;
            margin: 0 auto;
            font-family: 'Open Sans', sans-serif;
        }

        .fw-four {
            font-weight: 400;
        }

        .fw-seven {
            font-weight: 700;
        }

        .fw-six {
            font-weight: 600;
        }

        .common-get-btn {
            border-radius: 8px;
            background: linear-gradient(90deg, #19D3AE -22.5%, #0FCFEC 120.83%);
            padding: 15px;
            color: #ffffff;
            font-size: 14px;
            border: none;
            margin-top: 40px;
        }

        .common-heading-one {
            font-size: 20px;
            color: var(--second-color);
        }

        .common-heading-two {
            font-size: 36px;
            color: var(--first-color);
        }

        .common-heading-three {
            font-size: 36px;
            color: #FFF;
            margin: 22px 0px;

        }

        /*********** Common css style code end  ************/

        /*********** Header Area style code start  ************/

        #header {
            width: 100%;
            height: 64px;
            padding: 0px 70px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .brand-heading {
            font-size: 18px;
            color: #000000;
        }

        .bar-icon-container {
            display: none;
        }

        .navigation>ul {
            display: flex;
            gap: 30px;

        }

        .navbar {
            background: linear-gradient(to right, skyblue, darkblue);
            padding: 1em;
            display: above;
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

        .select-menu-btn {
            background-color: var(--first-color);
            border-radius: 8px;
            padding: 11px;
            color: #D4D9E3 !important;
        }

        /*********** Header Area style code end  ************/

        /*********** Banner Section style code start  ************/

        #banner-section {
            max-width: 1363px;
            height: 700px;
            margin: 0 auto;
            margin-top: 20px;
            background-image: url('./images/Bannerbg.png');
            background-position: center;
            background-repeat: no-repeat;
            background-size: contain;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .left-banner-container {
            max-width: 655px;
            height: 266px;
            margin-left: 30px;
        }

        .banner-heading {
            color: var(--first-color);
            font-size: 48px;
        }

        .banner-para {
            font-size: 16px;
            color: var(--first-color);
        }

        .right-banner-container {
            max-width: 594px;
            height: 355px;
            margin-right: 38px;
        }

        .right-banner-container img {
            width: 100%;
            height: 100%;
        }

        /*********** Banner Section style code end  ************/

        /*********** Info card Section style code start  ************/
        #info-card-section {
            display: flex;
            justify-content: space-between;
            margin: 0px 21px;
            margin-top: -5px;
            gap: 24px;

        }

        .info-card {
            /* max-width: 450px; */
            flex: 1;
            height: 190px;
            border-radius: 14px;
            background: linear-gradient(90deg, #19D3AE -38.67%, #0FCFEC 129.78%);
            color: #ffffff;
            padding: 50px 25px;
            display: flex;
            align-items: center;
            gap: 22px;
        }

        .info-card-select {
            background: var(--first-color) !important;
        }

        .info-card-title {
            font-size: 20px;
            margin-bottom: 12px;
        }

        .info-card-link {
            text-decoration: none;
            color: inherit;
            display: block;
        }

        .info-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            transition: transform 0.2s ease-in-out;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            cursor: pointer;
            display: flex;
            align-items: center;
            padding: 16px;
        }

        .info-card:hover {
            transform: translateY(-5px);
        }

        .info-card-img-container img {
            width: 50px;
            height: 50px;
            object-fit: cover;
        }

        .info-card-details {
            margin-left: 16px;
        }

        .info-card-title {
            font-size: 1.25em;
            margin: 0;
            color: #333;
        }

        .fw-seven {
            font-weight: 700;
        }

        .fw-four {
            font-weight: 400;
        }

        /*********** Info card Section style code end  ************/
        /*********** Testimonial section start  ************/
        #testimonial-section {
            max-width: 1333px;
            height: 514px;
            margin: 0 auto;
            padding: 0px 21px;
            margin-bottom: 140px;
            background-image: url(./images/coma.png);
            background-repeat: no-repeat;
            background-position: right top;
        }

        .testimonial-card-container {
            display: flex;
            gap: 50px;
            margin-top: 146px;

        }

        .testimonial-card {
            padding: 30px;
            height: 270px;
            border-radius: 18px;
            background-color: #ffffff;
            box-shadow: 3px 4px 10px 2px rgba(0, 0, 0, 0.05);
        }

        .testimonial-card-details {
            margin-top: 30px;
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .testimonial-card-details img {
            border: 3px solid var(--second-color);
            border-radius: 50%;
            padding: 2px;
        }

        .patient-name {
            font-size: 20px;
            color: var(--first-color);
        }

        /*********** Testimonial section end  ************/
        /*********** Footer start  ************/
        #footer {
            width: 100%;
            height: 407px;
            background-image: url(./images/footerbg.png);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .footer-uper-container {
            padding: 70px 70px;
            display: flex;
            justify-content: space-between;
        }

        .footer-menu-heading {
            font-size: 18px;
            color: #939393;
            margin-bottom: 19px;
        }

        .footer-menu-ul>li {
            margin-bottom: 14px;
        }

        .footer-menu-ul>li>a {
            color: var(--first-color);
        }

        .copyright {
            text-align: center;
        }
    </style>

</head>
    @extends('layouts.app')
    
    @section('title', 'Welcome')
            
    @section('content')
        
    <!--********** Main Container start  **********-->
    <div class="container">
        <!--******** Main Area start  ********-->
        <main>
            <!--******** Banner section start  ********-->
            <section id="banner-section">
                <div class="left-banner-container">
                    <h2 class="banner-heading fw-seven">Welcome, Doctor!</h2>
                    <p class="banner-para fw-four">"Your dedication and expertise are invaluable,
                        and we're excited to support your journey in making a positive impact on countless lives."</p>
                    <button class="common-get-btn fw-seven">GET STARTED</button>
                </div>
                <div class="right-banner-container">
                    <img src="./images/hsptl.jpg" alt="">
                </div>
            </section>
            <!--******** Banner section end  ********-->
            <!--******** Info card section start  ********-->
            <section id="info-card-section">
                <a href="/reminders/index" class="info-card-link">
                    <div class="info-card">
                        <div class="info-card-img-container">
                            <img src="./images/clock.png" alt="">
                        </div>
                        <div class="info-card-details">
                            <h5 class="info-card-title fw-seven">Alerts and Reminders</h5>
                            <p class="fw-four">On-call schedules and Appointment reminders</p>
                        </div>
                    </div>
                </a>
                <a href="/patients" class="info-card-link">
        <div class="info-card info-card-select">
            <div class="info-card-img-container">
                <img src="./images/patientpp.png" width="200" height="200" alt="">
            </div>
            <div class="info-card-details">
                <h5 class="info-card-title fw-seven">Patient Profiles</h5>
                <p class="fw-four">Access archive and patient records and create new patient data</p>
            </div>
        </div>
    </a>
    <a href="/help_support/index" class="info-card-link">
        <div class="info-card">
            <div class="info-card-img-container">
                <img src="./images/phone.png" alt="">
            </div>
            <div class="info-card-details">
                <h5 class="info-card-title fw-seven">Help & Support</h5>
                <p class="fw-four">Call us on: +234 xxx xxx xxxx, +234 xxx xxx xxxx or +234 xxx xxx xxxx</p>
            </div>
        </div>
    </a>
</section>
            <!--******** Info card section end  ********-->
            <!--******** Testimonial section start  ********-->
            <section id="testimonial-section">
                <div class="testimonial-heading-container">
                    <h3 class="common-heading-one fw-seven">Testimonial</h3>
                    <h4 class="common-heading-two fw-four">What Our Patients Says</h4>
                </div>
                <div class="testimonial-card-container">
                    <div class="testimonial-card">
                        <p class="testimonial-card-description">It is a long established fact that by the readable content of a lot layout. The point of using Lorem a more-or-less normal distribu to using Content here, content</p>
                        <div class="testimonial-card-details">
                            <img src="./images/patient.png" alt="">
                            <div>
                                <h5 class="patient-name fw-six">Johnson Imaebi</h5>
                                <p>mararaba</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <p class="testimonial-card-description">It is a long established fact that by the readable content of a lot layout. The point of using Lorem a more-or-less normal distribu to using Content here, content</p>
                        <div class="testimonial-card-details">
                            <img src="./images/patient.png" alt="">
                            <div>
                                <h5 class="patient-name fw-six">Winston Henry</h5>
                                <p>Garki</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <p class="testimonial-card-description">It is a long established fact that by the readable content of a lot layout. The point of using Lorem a more-or-less normal distribu to using Content here, content</p>
                        <div class="testimonial-card-details">
                            <img src="./images/patient.png" alt="">
                            <div>
                                <h5 class="patient-name fw-six">Charles Chukuemeka</h5>
                                <p>asokoro</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--******** Testimonial section end  ********-->
        </main>
        <!--******** Main Area end  ********-->
        <footer id="footer">
            <div class="footer-uper-container">
                <div>
                    <h5 class="footer-menu-heading fw-seven">SERVICES</h5>
                    <ul class="footer-menu-ul">
                        <li><a href="">Emergency Checkup</a></li>
                        <li><a href="">Monthly Checkup</a></li>
                        <li><a href="">Weekly Checkup</a></li>
                        <li><a href="">Deep Checkup</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="footer-menu-heading fw-seven">OTHER HEALTH SPECIALISTS</h5>
                    <ul class="footer-menu-ul">
                        <li><a href="">Sports Treatment</a></li>
                        <li><a href="">Pregnancy check-ups</a></li>
                        <li><a href="">Phychology Appointments</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="footer-menu-heading fw-seven">OUR ADDRESS</h5>
                    <address>
                        <p>Abuja, plot xx, behind xxxx, Garki</p>
                    </address>
                </div>
            </div>
            <div class="copyright">
                <p>Copyright 2024 || All Rights Reserved</p>
                <p>Joseph Okpetu's Project</p>
            </div>
        </footer>
    </div>
    <!--********** Main Container start  **********-->
    @endsection

</html>