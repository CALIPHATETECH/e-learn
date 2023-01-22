<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Programme;

class ProgrammeController extends Controller
{
    public function index($departmentId)
    {
        return view('department.programme.index',['department'=>Department::find($departmentId)]);
    }

    public function update(Request $request, $programmeId)
    {
        $request->validate(['name'=>'required|unique:programmes']);
        $programme = Programme::find($programmeId);
        $programme->update(['name'=>$request->name]);
        return redirect()->route('department.programme.index',[$programme->department->id]);
    }

    public function delete($programmeId)
    {
        $programme = Programme::find($programmeId);
        $programme->delete();
        return redirect()->route('department.programme.index',[$programmeId]);
    }

    public function register(Request $request, $departmentId)
    {
        $request->validate(['name'=>'required|unique:programmes']);
        Department::find($departmentId)->programmes()->create(['name'=>$request->name]);
        return redirect()->route('department.programme.index',[$departmentId]);
    }
}
