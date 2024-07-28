@extends('layouts.app')

@section('title', 'Archived Patient Records')

@section('content')
<div class="container mt-5">
    <h1>Archived Patient Records</h1>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Patient ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Diagnosis</th>
                <th>Treatment</th>
                <th>Admission Date</th>
                <th>Discharge Date</th>
                <th>Doctor</th>
                <th>Notes</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($patients as $patient)
            <tr>
                <td>{{ $patient->patient_id }}</td>
                <td>{{ $patient->name }}</td>
                <td>{{ $patient->age }}</td>
                <td>{{ $patient->gender }}</td>
                <td>{{ $patient->diagnosis }}</td>
                <td>{{ $patient->treatment }}</td>
                <td>{{ $patient->admission_date }}</td>
                <td>{{ $patient->discharge_date }}</td>
                <td>{{ $patient->doctor }}</td>
                <td>{{ $patient->notes }}</td>
                <td>
                    <div class="btn-group" style="visibility: hidden;">
                        <a href="{{ route('patients.show', $patient->id) }}" class="btn btn-primary">View</a>
                        <a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-warning">Edit</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('cdss_toolkit.index') }}" class="btn cdss-toolkit-button">CDSS Toolkit</a>
    <a href="{{ route('patients.create') }}" class="btn btn-success" style="position: fixed; bottom: 10px; left: 10px;">Create New</a>
</div>

<style>
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
    .table {
        width: 100%;
        margin: 20px 0;
        border-collapse: collapse;
    }
    
    .table thead th {
        background-color: #343a40;
        color: white;
        padding: 10px;
        text-align: left;
        border-bottom: 2px solid #dee2e6;
    }
    
    .table tbody td {
        padding: 10px;
        border-bottom: 1px solid #dee2e6;
    }

    .table-hover tbody tr:hover {
        background-color: #f8f9fa;
    }

    .table-hover tbody tr:hover .btn-group {
        visibility: visible;
    }

    .btn-group .btn {
        margin-right: 10px;
    }

    .btn-success {
        background-color: #28a745;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 10px;
        cursor: pointer;
    }

    .btn-success:hover {
        background-color: #218838;
    }

    .cdss-toolkit-button {
        position: fixed;
        bottom: 10px;
        left: calc(10px + 2.5in); /* 1 inch to the right of the 'Create New' button */
        display: inline-block;
        width: 2in; /* 2 inches wide */
        padding: 10px;
        background: linear-gradient(to right, green, skyblue); /* Gradient color */
        color: white;
        text-align: center;
        text-decoration: none;
        border-radius: 5px;
        font-weight: bold;
    }
</style>
@endsection