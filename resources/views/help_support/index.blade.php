<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help & Support</title>
    <style>
        html body {
            background: url('{{asset('images/3.jpg') }}') no-repeat center center fixed;
            background-size: cover;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(255, 255, 255, 0.5);
            z-index: -1;
        }

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

        .card {
            background: linear-gradient(to right, skyblue, green);
            opacity: 80%;
            color: black;
            width: 250px;
            height: 300px;
            margin: 4em;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card a {
            text-decoration: none;
            color: black;
            font-size: 1.2em;
            position: relative;
        }
    </style>
</head>

@extends('layouts.app')

@section('title', 'Help & Support')

@section('content')
<div class="container mt-5">
    <h1>Help & Support</h1>
    <p>This is the help and support page.</p>

    <div class="content">
        <div class="card" id="appointments">
            <a href="/help_support/faqs">FAQ's</a>
        </div>
        <div class="card" id="help_documentation">
            <a href="/help_support/help_documentation">Help Documentation</a>
        </div>
        <div class="card" id="prescriptions">
            <a href="/help_support/support_contact">Contact Us</a>
        </div>
        <div class="card" id="user-manuals">
            <a href="/help_support/user_manual">User Manuals</a>
        </div>
    </div>
</div>
@endsection