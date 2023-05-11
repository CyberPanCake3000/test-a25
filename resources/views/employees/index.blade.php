@extends('layout.main')

@section('content')
    @foreach($employees as $employee)
        <div>{{ $employee->id }}</div>
        <div>{{ $employee->name }}</div>
    @endforeach
@endsection
