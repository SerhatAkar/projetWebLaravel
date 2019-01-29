<?php

namespace App\Http\Controllers;

use App\proposition;
use Illuminate\Http\Request;

class PropositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proposerEvenement');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $proposition =  proposition::create(
        $request->all());

        return redirect('/proposerEvenement')->with('status', 'Votre demande à bien été envoyée !');


      

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\proposition  $proposition
     * @return \Illuminate\Http\Response
     */
    public function show(proposition $proposition)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\proposition  $proposition
     * @return \Illuminate\Http\Response
     */
    public function edit(proposition $proposition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\proposition  $proposition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, task $task)
    {
        $task->statut = $request->statut;

        $task->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\proposition  $proposition
     * @return \Illuminate\Http\Response
     */
    public function destroy(proposition $proposition)
    {
        //
    }


public function accept( $id){
   
    $table = proposition::findOrFail($id);
    $table->statut = 1;
    $table->save();
    return view('modererProposition')->with('message', 'La proposition à bien été validée !');
}

public function decline( $id ) {

    $table = proposition::findOrFail($id);
    $table->statut = 1;
    $table->save();
    return view('modererProposition')->with('message', 'La proposition à bien été supprimée !');
}

}