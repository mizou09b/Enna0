<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OffresController extends Controller
{
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
}
