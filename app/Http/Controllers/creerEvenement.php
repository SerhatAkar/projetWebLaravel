<?php

namespace App\Http\Controllers;
use App\proposition;
use Illuminate\Http\Request;
use App\evenement;


class creerEvenement extends Controller
{
    public function donnerData(request $request) {
    $table = proposition::findOrFail($request->id);
    return view('creerEvenement')->with('table', $table);
   
    }


    public function creer(request $request){
        $evenement =  evenement::create($request->all());
       
        return redirect('evenements');

    }
}


