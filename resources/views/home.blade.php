@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="list-group" id="list-tab" role="tablist">
                                <a href="#" class="list-group-item list-group-item-action active">Home</a>
                                <a href="{{route('bal')}}" class="list-group-item list-group-item-action">Balance</a>
                                <a href="{{route('tranfer')}}" class="list-group-item list-group-item-action">Transfer Funds</a>
                                <a href="{{route('withdraw')}}" class="list-group-item list-group-item-action">Withdraw Funds</a>
                                <a href="{{route('profile')}}" class="list-group-item list-group-item-action">Profile</a>
                                <a href="{{ route('logout') }}" class="list-group-item list-group-item-action">Logout</a>

                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="list-group">
                                <div class="list-group-item">Hello {{ Auth::user()->name }} ({{ Auth::user()->account_id }}) <br>And Welcome To JKATMS,<br>Use The Menu on the right to:-
                                    <ul>
                                        <li>Check Balance</li>
                                        <li>Transfer Funds</li>
                                        <li>Withdraw Funds</li>
                                    </ul>
                                    Incase Of any issue dont hesitate to call us on 0722123456.
                                    <br>
                                    Enjoy Our Services.<br><br>
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
