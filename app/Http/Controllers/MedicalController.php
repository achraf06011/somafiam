<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicalController extends Controller
{
    public function m()
    {
        return view('robotique.medical');
    }
    public function agroalimentaire()
    {
        return view('robotique.agroalimentaire');
    }
    public function automobile()
    {
        return view('robotique.automobile');
    }
    public function electronique()
    {
        return view('robotique.electronique');
    }
    public function energie()
    {
        return view('robotique.energie');
    }
}
