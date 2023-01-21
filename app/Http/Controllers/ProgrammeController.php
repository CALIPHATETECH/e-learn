<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programme;

class ProgrammeController extends Controller
{
    public function index()
    {
        return view('programme.index',['programmes'=>Programme::all()]);
    }
}
