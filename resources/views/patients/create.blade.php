@extends('layouts.app')

@section('content')
<h1>Add Patient</h1>
<form action="{{ route('patients.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="age">Age</label>
        <input type="number" name="age" id="age">
    </div>
    <div>
        <label for="gender">Gender</label>
        <input type="text" name="gender" id="gender">
    </div>
    <button type="submit">Add</button>
</form>
@endsection
