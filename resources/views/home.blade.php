@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-7">
                <div class="p-3 border">
                    <h3>{{ __('Сотрудники') }}</h3>
                    <div>
                        <div class="row border-bottom">
                            <div class="col-1">ID</div>
                            <div class="col-3">Name</div>
                            <div class="col-3">email</div>
                        </div>
                        @foreach($employees as $employee)
                            <div class="row">
                                <div class="col-1">{{ $employee->id }}</div>
                                <div class="col-3">{{ $employee->name }}</div>
                                <div class="col-3">{{ $employee->email }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-5">
                <div class="p-3 border">
                <h3>{{ __('Выплаты') }}</h3>
                    <div>
                        <div class="row border-bottom">
                            <div class="col-1">ID</div>
                            <div class="col-3">Status</div>
                            <div class="col-3">Hours</div>
                            <div class="col-3">Employee</div>
                        </div>
                @foreach($transactions as $transaction)
                    <div class="row">
                        <div class="col-1">{{ $transaction->id }}</div>
                        <div class="col-3">{{ $transaction->status }}</div>
                        <div class="col-3">{{ $transaction->hours }}</div>
                        <div class="col-3">{{ $transaction->employee_id }}</div>
                    </div>
                @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
