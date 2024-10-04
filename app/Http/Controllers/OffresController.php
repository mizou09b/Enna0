<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OffresController extends Controller
{




    //To save offre in db:
    public function publierOffre(Request $request) {

        $offresData = $request->validate([
            'numero' => 'required',
            'objet' => 'required',
            'date_Limite' => 'required',
            'observation' => 'nullable|min:3'
        ]);

        $offresData['numero'] = strip_tags($offresData['numero']);
        $offresData['objet'] = strip_tags($offresData['objet']);
        $offresData['observation'] = strip_tags($offresData['observation']);
        $offresData['user_id'] = Auth::id();

        Offre::create($offresData);
        return redirect('offres');
    }

    //to show offres from db in table:
    public function offres() {

        $offres = Offre::get();
        return view('offres', [
            'offres' => $offres
        ]);
    }

    //show the form:
    public function formulair() {
        return view('formulairOffre');
    }

    //edit the offre:
    public function edit_offre(Offre $offre) {
        return view('edit_offre', compact('offre'));
    }

    //update the offre :
    public function update_offre (Request $request, Offre $offre) {


       $validation_offre = $request->validate([
        'numero' => 'required',
        'objet' => 'required',
        'date_Limite' => 'required|date',
        'proroge' => 'nullable|date',
        'observation' => 'nullable'
        ]);

        $offre->update($validation_offre);
        return redirect('offres')->with('success', "Offre editer avec succes");
    }
}

