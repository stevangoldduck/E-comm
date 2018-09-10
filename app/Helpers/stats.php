<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Withdrawals;
use App\Products;
function getComm($id)
{
//get total commissions
    $comm = DB::table('users')
        ->join('shareds', 'users.id', '=', 'shareds.belongs_to')
        ->where('shareds.belongs_to', '=', $id)
        ->join('transactions', 'transactions.link_origin', '=', 'shareds.link')
        ->join('commissions', 'commissions.trans_id', '=', 'transactions.id_trans')
        ->sum('commissions.amount');
    return $comm;

}

function getPartner($id)
{
    //get total downliner
    $user = User::find($id);
    $count = $user->countChildren($id);

    return $count;
}

function getWithdraw($id)
{
    //get withdrawn
    $withdrawn = Withdrawals::where('belongs_to',$id)->sum('amount');
    return $withdrawn;
}

function getBalance($id)
{
    //get current balance
    $balance = User::where('id',$id)->sum('balance');
    return $balance;
}

function getAllProducts()
{
    $products_list = Products::all();
    return $products_list;
}
?>