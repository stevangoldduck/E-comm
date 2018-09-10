<?php

namespace App\Http\Controllers;

use App\Shared;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SharedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $id = Auth::id();
        $link = Shared::all()->where('belongs_to',$id)->sortByDesc('id');
        return view('shared', compact('link'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = $request['belongs_to'];
        $rand1 = str_random(7);
        $rand2 = str_random(4);
        $compiled = $rand1.$user.$rand2;

        $shareds = new Shared();
        $shareds->link = $compiled;
        $shareds->sold = 0;
        $shareds->belongs_to = $user;
        $shareds->timestamps = true;
        $shareds->save();

        return redirect('admin/shared-link');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Shared  $shared
     * @return \Illuminate\Http\Response
     */
    public function show(Shared $shared)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shared  $shared
     * @return \Illuminate\Http\Response
     */
    public function edit(Shared $shared)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shared  $shared
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shared $shared)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shared  $shared
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shared $shared)
    {
        //
    }
}
