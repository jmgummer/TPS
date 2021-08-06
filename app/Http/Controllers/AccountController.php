<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\FundsTransfer;
use Auth;
use DB;

class AccountController extends Controller{
     public function __construct(){
        $this->middleware('auth');
    }

    public function getBalace(){
        date_default_timezone_set('Africa/Nairobi');
        $myid = Auth::user()->account_id;
        $deposits = DB::table('deposits')->where('account_id', $myid)->sum('amount');
        $depo =number_format($deposits,2);
        $withdraws = DB::table('withdraws')->where('account_id', $myid)->sum('amount');
        $with =number_format($withdraws,2);
        $transfers = DB::table('transfers')->where('account_id', $myid)->sum('amount');
        $tran =number_format($transfers,2);
        $balance = $deposits - $withdraws-$transfers;
        $bal =number_format($balance,2);
        $today = date('d-M-Y H:i:s');
        return view('balance',
            ['deposits'=>$depo,'withdraws'=>$with,'balance'=>$bal,'transfer'=>$tran,'today'=>$today]);
    }

    public function transfer(){
        return view('transfer');
    } 

    public function fundsTransfer(Request $request){
        $to = $request->account_id;
        $amount = $request->amount;
        $reason = $request->reason;
        $password = $request->password;
        //echo "$to -> $amount -> $reason -> $password";

        $res = FundsTransfer::fundsTransfer($to,$amount,$reason,$password);
    
        return view('fundsTransfer',['response'=>$res]);
    }

    public function withdraw(){
        return view('withdraw');
    }

    public function confirm($amount){
        $res = FundsTransfer::withdrawFunds($amount);
       return view('FundWithdraw',['res'=>$res]);
    }

    public function confirm2(Request $request){
       $amount = $request->amount;

       $res = FundsTransfer::withdrawFunds($amount);
       return view('FundWithdraw',['res'=>$res]);
    }

    public function profile(){
        return view('profile');
    }
}
