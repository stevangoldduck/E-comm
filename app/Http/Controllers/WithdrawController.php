<?php

namespace App\Http\Controllers;

use App\User;
use App\Withdrawals;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Gbrock\Table\Table;
use Illuminate\Support\Facades\DB;

class WithdrawController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();
        $rows = DB::table('withdraws')->select('created_at','amount','status')->where('belongs_to',$id)->get(); // Get all users from the database
        $table =  new Table($rows);
        $table->create($rows,['created_at']); // Generate a Table based on these "rows"
        return view('withdraw', ['table' => $table]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Withdrawals  $withdrawals
     * @return \Illuminate\Http\Response
     */
    public function show(Withdrawals $withdrawals)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Withdrawals  $withdrawals
     * @return \Illuminate\Http\Response
     */
    public function edit(Withdrawals $withdrawals)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Withdrawals  $withdrawals
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Withdrawals $withdrawals)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Withdrawals  $withdrawals
     * @return \Illuminate\Http\Response
     */
    public function destroy(Withdrawals $withdrawals)
    {
        //
    }
}
