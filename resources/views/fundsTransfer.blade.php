@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                 </div>
                @endif
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="list-group" id="list-tab" role="tablist">
                                <a href="{{route('home')}}" class="list-group-item list-group-item-action">Home</a>
                                <a href="{{route('bal')}}" class="list-group-item list-group-item-action">Balance</a>
                                <a href="{{route('tranfer')}}" class="list-group-item list-group-item-action active">Transfer Funds</a>
                                <a href="{{route('withdraw')}}" class="list-group-item list-group-item-action">Withdraw Funds</a>
                                <a href="{{route('profile')}}" class="list-group-item list-group-item-action">Profile</a>
                                <a href="{{ route('logout') }}" class="list-group-item list-group-item-action">Logout</a>

                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="list-group">
                                <div class="list-group-item">
                                    {!! $response !!}
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
