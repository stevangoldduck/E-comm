<?php

namespace App\Http\Controllers;

use App\Commissions;
use Gbrock\Table\Table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CommissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $user = Auth::id();
        $comm = DB::table('users')
            ->join('shareds', 'users.id', '=', 'shareds.belongs_to')
            ->where('shareds.belongs_to', '=', $user)
            ->join('transactions', 'transactions.link_origin', '=', 'shareds.link')
            ->join('commissions', 'commissions.trans_id', '=', 'transactions.id_trans')
            ->select('commissions.trans_id','commissions.amount')
        ->get();

        $table = new Table($comm);
        $table->create($comm);
        return view('commissions',['commissions' => $table]);
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
     * @param  \App\Commissions  $commissions
     * @return \Illuminate\Http\Response
     */
    public function show(Commissions $commissions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Commissions  $commissions
     * @return \Illuminate\Http\Response
     */
    public function edit(Commissions $commissions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Commissions  $commissions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commissions $commissions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Commissions  $commissions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commissions $commissions)
    {
        //
    }
}
