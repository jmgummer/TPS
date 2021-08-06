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
                                <a href="{{route('home')}}" class="list-group-item list-group-item-action">Home</a>
                                <a href="{{route('bal')}}" class="list-group-item list-group-item-action">Balance</a>
                                <a href="{{route('tranfer')}}" class="list-group-item list-group-item-action">Transfer Funds</a>
                                <a href="{{route('withdraw')}}" class="list-group-item list-group-item-action active">Withdraw Funds</a>
                                <a href="{{route('profile')}}" class="list-group-item list-group-item-action">Profile</a>
                                <a href="{{ route('logout') }}" class="list-group-item list-group-item-action">Logout</a>

                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="list-group">
                                <div class="list-group-item">
                                    <h3>Withdraw Funds</h3>
                                </div>
                            </div><br>
                            <div class="list-group">
                                <div class="list-group-item">
                                    <div class="row">
                                        @if(session()->has('message'))
                                             <div class="alert alert-success">
                                                 {{ session()->get('message') }}
                                             </div>
                                         @endif
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a href="{{ url('confirm/100') }}" class="form-control btn btn-default">100</a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="{{ url('confirm/500') }}" class="form-control btn btn-default">500</a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="{{ url('confirm/1000') }}" class="form-control btn btn-default">1,000</a>
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a href="{{ url('confirm/5000') }}" class="form-control btn btn-default">5,000</a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="{{ url('confirm/10000') }}" class="form-control btn btn-default">10,000</a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="{{ url('confirm/20000') }}" class="form-control btn btn-default">20,000</a>
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a href="{{ url('confirm/50000') }}" class="form-control btn btn-default">50,000</a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="{{ url('confirm/100000') }}" class="form-control btn btn-default">100,000</a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="{{ url('confirm/200000') }}" class="form-control btn btn-default">200,000</a>
                                        </div>
                                    </div><br>
                                    <form method="POST" action="{{ route('confirm2') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label for="Other Amount">Other Amount:</label>
                                                <input type="text" name="amount" class="form-control" placeholder="Other Amoount">
                                           </div>
                                            <div class="col-md-4">
                                                <label for="Other Amount">Withdraw:</label>
                                                <input type="submit" value="Withdraw" name="submit" class="form-control btn btn-primary" >
                                            </div>
                                        </div>
                                    </form>
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
