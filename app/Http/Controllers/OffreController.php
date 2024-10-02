<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OffreController extends Controller
{
    public function CreateOffre(Request $request) {

        $offreData = $request->validate([
            'numero'=> 'required',
            'objet' => 'required',
            'observation' => 'min:3'
        ]);

        $offreData['numero'] = strip_tags($offreData['numero']);
        $offreData['objet'] = strip_tags($offreData['objet']);
        $offreData['observation'] = strip_tags($offreData['observation']);
        $offreData['user_id'] = Auth::id();

        Offre::create($offreData);
        return redirect();
    }
}
