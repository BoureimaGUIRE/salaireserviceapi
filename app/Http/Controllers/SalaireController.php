<?php

namespace App\Http\Controllers;

use App\Models\Salaire;

class SalaireController extends Controller
{

    public function index()
    {
        $salaires = Salaire::all();
        return $this->successResponse($salaires);
    }

    public function show($id)
    {
        $salaire = Salaire::findOrFail($id);
        return $this->successResponse($salaire);
    }

}