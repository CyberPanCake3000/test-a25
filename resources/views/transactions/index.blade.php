@extends('layout.main')

@section('content')
    @foreach($transactions as $transaction)
        <div>{{ $transaction->id }}</div>
        <div>{{ $transaction->hours }}</div>
    @endforeach
@endsection
