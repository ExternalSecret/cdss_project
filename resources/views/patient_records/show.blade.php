@extends('layouts.app')

@section('title', 'View/Edit Patient Record')

@section('content')
<div class="container mt-5">
    <h1>View/Edit Patient Record</h1>
    <form action="{{ route('patients.update', $patient->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="patient_id">Patient ID</label>
            <input type="text" name="patient_id" class="form-control" value="{{ $patient->patient_id }}" required>
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $patient->name }}" required>
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" name="age" class="form-control" value="{{ $patient->age }}" required>
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <input type="text" name="gender" class="form-control" value="{{ $patient->gender }}" required>
        </div>
        <div class="form-group">
            <label for="diagnosis">Diagnosis</label>
            <input type="text" name="diagnosis" class="form-control" value="{{ $patient->diagnosis }}" required>
        </div>
        <div class="form-group">
            <label for="treatment">Treatment</label>
            <input type="text" name="treatment" class="form-control" value="{{ $patient->treatment }}" required>
        </div>
        <div class="form-group">
            <label for="admission_date">Admission Date</label>
            <input type="date" name="admission_date" class="form-control" value="{{ $patient->admission_date }}" required>
        </div>
        <div class="form-group">
            <label for="discharge_date">Discharge Date</label>
            <input type="date" name="discharge_date" class="form-control" value="{{ $patient->discharge_date }}" required>
        </div>
        <div class="form-group">
            <label for="doctor">Doctor</label>
            <input type="text" name="doctor" class="form-control" value="{{ $patient->doctor }}" required>
        </div>
        <div class="form-group">
            <label for="notes">Notes</label>
            <textarea name="notes" class="form-control">{{ $patient->notes }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection