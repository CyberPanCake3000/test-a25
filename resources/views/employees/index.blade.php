@extends('layouts.app')

@section('content')
    @foreach($employees as $employee)
        <div>{{ $employee->id }}</div>
        <div>{{ $employee->name }}</div>
    @endforeach
    {{ $employees->links() }}
@endsection
