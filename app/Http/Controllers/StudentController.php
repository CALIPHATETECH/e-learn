<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function index()
    {
        return view('student.index',['students'=>User::where('role','Student')->get()]);
    }

    public function register(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'admission_no'=>'required|unique:users',
            'password'=>'required',
        ]);
        $input = $request->all();
        User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'admission_no' => $input['admission_no'],
            'programme_id' => $input['programme'],
            'password' => Hash::make($input['password']),
        ]);
        return redirect('/student');
    }
}
