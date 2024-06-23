@extends('layouts.app')

@section('content')
<h1>Patients</h1>
<a href="{{ route('patients.create') }}">Add Patient</a>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
        </tr>
    </thead>
    <tbody>
        @foreach($patients as $patient)
        <tr>
            <td>{{ $patient->name }}</td>
            <td>{{ $patient->age }}</td>
            <td>{{ $patient->gender }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
