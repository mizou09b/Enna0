<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class OffresController extends Controller
{

    //To store offre in db:
    public function publierOffre(Request $request)
    {

        $offresData = $request->validate([
            'numero' => 'required',
            'objet' => 'required',
            'date_Limite' => ['required', 'date','after_or_equal:today'],
            'date_proroge' => ['nullable','date', 'after_or_equal:date_Limite'],
            'pdf' => ['nullable', 'file', 'mimes:pdf'],
            'observation' => 'nullable'
        ]);

        $offresData['numero'] = strip_tags($offresData['numero']);
        $offresData['objet'] = strip_tags($offresData['objet']);
        $offresData['observation'] = strip_tags($offresData['observation']);
        $offresData['user_id'] = Auth::id();

        // Inside the publierOffre method after handling the PDF upload
        if ($request->hasFile('pdf')) {
            $pdfpath = $request->file('pdf')->store('pdfs', 'public');
            $offresData['pdf'] = $pdfpath; // Store the file path in the database
        } else {
            $offresData['pdf'] = null; // Set to null if no file was uploaded
        }

        Offre::create($offresData);
        return redirect('offres');
    }

    //pdf download method:
    public function pdfdownload($pdf)
    {
        $path = storage_path('app/public/pdfs/' . $pdf); // Get the full path to the file
        if (!File::exists($path)) {
            abort(404); // Return a 404 error if the file doesn't exist
        }
        return response()->file($path); // Serve the file for download
    }


    //to show offres from db in table:
    public function offres()
    {
        // Get all offers ordered by created_at in descending order
        $offres = Offre::orderBy('created_at', 'desc')->get();
        return view('offres', compact('offres'));
    }

    //show the form:
    public function formulair()
    {
        return view('formulairOffre');
    }

    //edit the offre:
    public function edit_offre(Offre $offre)
    {
        return view('edit_offre', compact('offre'));
    }

    //update the offre :
    public function update_offre(Request $request, Offre $offre)
    {
        $validation_offre = $request->validate([
            'numero' => 'required',
            'objet' => 'required',
            'date_Limite' => 'required|date',
            'date_proroge' => 'nullable|date',
            'pdf' => ['nullable', 'file', 'mimes:pdf'],
            'observation' => 'nullable'
        ]);

        $offre->update($validation_offre);
        return redirect('offres')->with('success', "Offre editer avec succes");
    }

    //delete function :
    public function delete_offre(Offre $offre)
    {
        $offre->delete();
        return redirect('/offres')->with('error', 'Offre supprimer!');
    }
}
