@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($employees as $employee)
                <div>{{ $employee->id }}</div>
                <div>{{ $employee->name }}</div>
            @endforeach

            @foreach($transactions as $transaction)
                <div>{{ $transaction->id }}</div>
                <div>{{ $transaction->status }}</div>
            @endforeach
        </div>
    </div>
</div>
@endsection
