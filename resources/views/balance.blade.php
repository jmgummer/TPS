@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Balance') }}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="list-group">
                                <a href="{{route('home')}}" class="list-group-item list-group-item-action">Home</a>
                                <a href="#" class="list-group-item list-group-item-action active">Balance</a>
                                <a href="{{route('tranfer')}}" class="list-group-item list-group-item-action">Transfer Funds</a>
                                <a href="{{route('withdraw')}}" class="list-group-item list-group-item-action">Withdraw Funds</a>
                                <a href="{{route('profile')}}" class="list-group-item list-group-item-action">Profile</a>
                                <a href="{{ route('logout') }}" class="list-group-item list-group-item-action">Logout</a>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="list-group">
                                <div class="list-group-item list-group-item-action">
                                    <p>Below is your balance As At {{$today}}</p>
                                </div>
                                <table class="table table-bordered table-hover ">
                                    <tr class="table-success">
                                        <th>Deposits:</th>
                                        <th>{{$deposits}}</th>
                                    </tr>
                                    <tr class="table-danger">
                                        <th>Transfers:</th>
                                        <th>{{$transfer}}</th>
                                    </tr><tr class="table-danger">
                                        <th>Withdraws:</th>
                                        <th>{{$withdraws}}</th>
                                    </tr>
                                    <tr class="table-active">
                                        <th>Balance:</th>
                                        <th>{{$balance}}</th>
                                    </tr>
                                </table>
                                <div class="list-group-item list-group-item-action">
                                    <p>Incase of discrepancy, Reach Us on our free toll number 08001234567.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
