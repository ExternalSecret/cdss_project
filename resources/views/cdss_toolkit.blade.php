@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Clinical Decision Support System Toolkit</h1>

    <form id="cdss-form">
        <div class="symptom-list">
            @foreach ($symptoms as $symptom)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="{{ $symptom }}" name="symptoms[{{ $symptom }}]">
                    <label class="form-check-label" for="{{ $symptom }}">
                        {{ $symptom }}
                    </label>
                </div>
            @endforeach
        </div>
        <button type="submit" class="btn btn-primary">Predict Illness</button>
    </form>

    <div id="result"></div>
</div>

<script>
document.getElementById('cdss-form').addEventListener('submit', function(event) {
    event.preventDefault();

    let formData = new FormData(this);
    let symptoms = {};
    let checkedCount = 0;

    formData.forEach((value, key) => {
        symptoms[key] = value === '1' ? 1 : 0;
        if (value === '1') {
            checkedCount++;
        }
    });

    if (checkedCount < 3) {
        document.getElementById('result').innerHTML = `<h2>Please select at least 3 symptoms.</h2>`;
        return;
    }

    fetch("{{ route('cdss_toolkit.predict') }}", {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({ symptoms: symptoms })
    })
    .then(response => response.json())
    .then(data => {
        document.getElementById('result').innerHTML = `<h2>Predicted Illness: ${data.illness}</h2>`;
    })
    .catch(error => console.error('Error:', error));
});
</script>
<style>
 body {
    background: url('{{ asset('images/Bannerbg.png') }}') no-repeat center center fixed;
    background-size: cover;
    color: white; /* Changed font color to white */
    font-family: 'Nunito', sans-serif;
    font-weight: 200;
    height: 100vh;
    margin: 0;
}

body::before {
    content: '';
    position: fixed;
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

body {
    font-family: Arial, sans-serif;
}

.symptom-list-container {
    position: fixed;
    top: 10px;
    left: 10px; 
    width: 300px; 
    max-height: calc(100vh - 20px); 
    overflow-y: auto; 
    background: rgba(255, 255, 255, 0.9); 
    border: 1px solid #ccc; 
    border-radius: 5px; 
    padding: 10px; 
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    z-index: 1000; 
}

.symptom-list {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 20px;
}

.form-check {
    display: flex;
    align-items: center;
}

.form-check-input {
    margin-right: 10px;
}

form {
    width: 80%;
    margin: auto;
}

label {
    display: block;
    margin: 15px 0;
    color: black;
    font-weight: bold;
}

input[type="checkbox"] {
    margin-right: 10px;
}

button {
    display: block;
    width: 200px;
    height: 50px;
    background-color: cyan;
    color: black;
    border: none;
    border-radius: 25px;
    font-size: 16px;
    cursor: pointer;
    margin: 20px auto;
}

button:hover {
    background-color: #0CBAA6;
}

h1, h2 {
    text-align: center;
    color: white;
}
</style>
@endsection