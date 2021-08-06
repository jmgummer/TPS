<?php
namespace App\Services;
use DB;
use Auth;

class FundsTransfer{
	
	function __construct(){
		// code...
	}

	public static function fundsTransfer($to,$amount,$reason,$password){
		$myid = Auth::user()->account_id;
		$todetail  = FundsTransfer::getUsersDetails($to);
		$arrsize = count($todetail);
		$res = '';
		$toname = '';
		$toid = '';

		foreach ($todetail as  $value) {
			$name = $value->name;
			$toid = $value->account_id;
		}
		

		$deposits = DB::table('deposits')->where('account_id', $myid)->sum('amount');
		$withdraws = DB::table('withdraws')->where('account_id', $myid)->sum('amount');
		$transfers = DB::table('transfers')->where('account_id', $myid)->sum('amount');
		$balance = $deposits - $withdraws-$transfers;
        $bal =number_format($balance,2);
        $toAmount =number_format($amount,2);

        if($balance >  $amount){
        	 if ($arrsize > 0) {
        	 	$decre = DB::table('deposits')->where('account_id', $myid)->decrement('amount', $amount);
        			$decrement = array('amount' => $amount,'account_id' => $myid,'reason'=>$reason);
        			$increment = array('amount' => $amount,'account_id' => $to);
				$sq = DB::table('transfers')->insert($decrement);
				$sq1 = DB::table('deposits')->insert($increment);
				if ($decre && $sq && $sq1) {
					return redirect()->back()->with('message', "Funds Successfully Transfered to $name of account $toid!");
				} else {
					$res = "<div class='alert alert-danger'>Funds Transfer Failed</div>";
				}
				
        	 } else {
        	 	$res = "<div class='alert alert-danger'>Invalid Account $to!!!!<br><br>Thank You..";
        	 }

        }else{
        	$res = "<div class='alert alert-danger'>Your Attempt to Transfer KES$toAmount Failed due to insufficient funds on your account.<br><br>Thank you.</div>
        		<a href = '{{route('home')}}' class='btn btn-success'> Go Home</a>
        		<a href = '{{route('bal')}}' class='btn btn-primary'> View Balance</a>
        		<a href = '{{route('withdraw')}}' class='btn btn-warning'> Withdraw</a>
        		<a href = '{{ route('logout') }}' class='btn btn-danger'> Sign Out</a>
        	";
        }

        return $res;
	}

	public static function getUsersDetails($account){
		$user = DB::table('users')->where('account_id', $account)->get();
		return $user;
	}

	public static function withdrawFunds($amount){
		$myid = Auth::user()->account_id;
		$deposits = DB::table('deposits')->where('account_id', $myid)->sum('amount');
		$withdraws = DB::table('withdraws')->where('account_id', $myid)->sum('amount');
		$transfers = DB::table('transfers')->where('account_id', $myid)->sum('amount');
		$balance = $deposits - $withdraws-$transfers;
		

		if(is_numeric($amount)){
			 $toAmount =number_format($amount,2);
			if($balance >  $amount){
				$arr = array('amount' => $amount,'account_id' => $myid);
				$sql = DB::table('withdraws')->insert($arr);
				if ($sql) {
					return redirect()->back()->with('message', "Success.Please Pick your Cash.Thank Your.");
				}
			}else{
				$res = "<div class='alert alert-danger'>Your Attempt to Withdraw KES$toAmount Failed due to insufficient funds on your account.<br><br>Thank you.</div>";
			}
		}else{
			$res = "<div class='alert alert-danger'>Only Numeric Figures Allowed.<br>$amount is not Numeric</div>";
		}
		return $res;
	}
}