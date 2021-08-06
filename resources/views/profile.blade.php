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
                                <a href="{{route('withdraw')}}" class="list-group-item list-group-item-action">Withdraw Funds</a>
                                <a href="{{route('profile')}}" class="list-group-item list-group-item-action active">Profile</a>
                                <a href="{{ route('logout') }}" class="list-group-item list-group-item-action">Logout</a>

                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="list-group">
                                <div class="list-group-item">
                                    <table class="table table-condensed table-hover">
                                        <tr>
                                            <th colspan="2">
                                                <center><img src="https://w7.pngwing.com/pngs/128/123/png-transparent-computer-icons-man-male-businessperson-management-people-public-relations-necktie-thumbnail.png" width="200" height="200" style="border-radius: 50%;"></center>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>Name:</th>
                                            <td>{{Auth::user()->name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Contact:</th>
                                            <td>{{Auth::user()->contact}}</td>
                                        </tr>
                                        <tr>
                                            <th>Email:</th>
                                            <td>{{Auth::user()->email}}</td>
                                        </tr>
                                        <tr>
                                            <th>Account:</th>
                                            <td>{{Auth::user()->account_id}}</td>
                                        </tr>                                        
                                        <tr>
                                            <th>Created On:</th>
                                            <td>{{Auth::user()->created_at}}</td>
                                        </tr>
                                    </table>
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
