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


    

    public function creer(Request $request){
       
        if ($request->hasFile('imagePath')) {
            if($request->file('imagePath')->isValid()) {
                try {
                    $file = $request->file('imagePath');
                    $namep = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
                    $request->file('imagePath')->move('documents', $namep);
                    
                      evenement::create([
                        'imagePath' => 'documents/'.$namep,
                        'name' => $request->name,
                        'place' => $request->place,
                        'desc' => $request->desc]

                    
                    );
                   
                

                } catch (Illuminate\Filesystem\FileNotFoundException $e) {
        

                }
            }
        }
       
        return redirect('evenements')->with('message', "L'evenement final  à bien été crée !");

    }
}


