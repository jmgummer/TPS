@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Funds Transfer') }}</div>

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
                                     <form method="POST" action="{{ route('fundsTransfer') }}">
                                    @csrf
                                    <div class="card card-custom">
 <div class="card-header">
  <h3 class="card-title">
   Funds Transfer
  </h3>
 
 </div>
 <!--begin::Form-->
  <form method="POST" action="{{ route('fundsTransfer') }}">
@csrf
  <div class="card-body">
   <div class="">
    <div class="">
     
    <div>
       @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
    </div>
    </div>
   </div>
   <div class="form-group">
    <label>Account Number To Transfer Funds To:</label>
    <input type="text" class="form-control form-control-solid" maxlength="12" name='account_id'  placeholder="Enter account number(12 digits Example 0110xxxxxx00)"/>
   </div>
   <div class="form-group">
    <label>Amount to Transfer</label>
    <input type="text" class="form-control form-control-solid" name='amount'  placeholder="Enter Amount: Eg 1000"/>
   </div>
   <div class="form-group">
    <label>Reason For Transfer</label>
    <textarea class="form-control form-control-solid" name='reason' rows="3"></textarea>
   </div>
  
  <div class="card-footer">
   <button type="Submit" class="btn btn-success mr-2">Submit</button>
   <button type="reset" class="btn btn-danger">Reset</button>
  </div>
 <!--end::Form-->
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
