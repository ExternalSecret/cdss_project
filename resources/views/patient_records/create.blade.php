@extends('layouts.app')

@section('title', 'Create New Patient Record')

@section('content')
<div class="container mt-5">
    <h1>Create New Patient Record</h1>
    <form action="{{ route('patients.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="patient_id">Patient ID</label>
            <input type="text" name="patient_id" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" name="age" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <input type="text" name="gender" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="diagnosis">Diagnosis</label>
            <input type="text" name="diagnosis" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="treatment">Treatment</label>
            <input type="text" name="treatment" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="admission_date">Admission Date</label>
            <input type="date" name="admission_date" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="discharge_date">Discharge Date</label>
            <input type="date" name="discharge_date" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="doctor">Doctor</label>
            <input type="text" name="doctor" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="notes">Notes</label>
            <textarea name="notes" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Create</button>
    </form>
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

    .select-menu-btn {
        background-color: var(--first-color);
        border-radius: 8px;
        padding: 11px;
        color: #D4D9E3 !important;
    }

    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background: #f8f9fa;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        font-weight: bold;
    }

    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ced4da;
        border-radius: 5px;
    }

    .form-group textarea {
        resize: vertical;
    }

    .btn-success {
        background-color: #28a745;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-success:hover {
        background-color: #218838;
    }
</style>
@endsection