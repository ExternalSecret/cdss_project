<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!--********** External css file links start  **********-->
    <link rel="stylesheet" href="./style.css">
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
        #contact-section{
            width: 100%;
            height: 604px;
            background-image: url(./images/cbg.png);
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .contact-container{
            width: 450px;
            height: 468px;
            text-align: center;
        }
        .form-input{
            display: block;
            width: 100%;
            padding: 15px;
            border-radius:8px;
            border: none;
            margin-bottom: 19px;
        }
        textarea{
            width: 100%;
            height: 136px;
            border-radius: 8px;
            border: none;
            padding: 15px;
            resize: vertical;
        }
        form > button{
            padding: 15px 30px !important;
        }
        body {
            background-color: #f0f8ff; /* AliceBlue */
            color: #333;
            font-family: 'Nunito', sans-serif;
        }

        .contact-container {
            background-color: #f8f9fa; /* Light grey */
            padding: 2em;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 2em auto;
            width: 50%; /* Adjust the width as needed */
            border: 1px solid #ccc; /* Border to create a grey box */
        }

        .contact-heading-container {
            text-align: center;
            margin-bottom: 1.5em;
        }

        .form-input, textarea {
            width: 100%;
            padding: 1em;
            margin-bottom: 1em;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .common-get-btn {
            background-color: #007bff; /* Bootstrap Blue */
            color: white;
            padding: 1em 2em;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        .common-get-btn:hover {
            background-color: #0056b3; /* Darker Blue */
        }

        .fw-seven {
            font-weight: 700;
        }

        .fw-four {
            font-weight: 400;
        }

        .common-heading-one {
            font-size: 2em;
            margin: 0;
        }

        .common-heading-three {
            font-size: 1.5em;
            margin: 0.5em 0 0;
        }

    </style>
</head>
@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<section id="contact-section">
                <div class="contact-container">
                    <div class="contact-heading-container">
                        <h3 class="common-heading-one fw-seven">Contact</h3>
                        <h4 class="common-heading-three fw-four">Stay connected with us</h4>
                    </div>
                    <form>
                        <input class="form-input" placeholder="Email Address" type="email">
                        <input class="form-input" placeholder="Subject" type="text" name="" id="">
                        <textarea placeholder="Your message" name="" id=""></textarea>
                        <button class="common-get-btn fw-seven">Submit</button>
                    </form>
                </div>
            </section>
@endsection
</body>
