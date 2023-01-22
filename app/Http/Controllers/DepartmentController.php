<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function index()
    {
        return view('department.index',['departments'=>Department::all()]);
    }

    public function update(Request $request, $departmentId)
    {
        $request->validate(['name'=>'required']);
        $department = Department::find($departmentId);
        $department->update(['name'=>$request->name]);
        return redirect()->route('department.index');
    }

    public function delete($departmentId)
    {
        $department = Department::find($departmentId);
        foreach($department->programmes as $programme){
            $programme->delete();
        }
        $department->delete();
        return redirect()->route('department.index');
    }

    public function register(Request $request)
    {
        $request->validate(['name'=>'required|unique:departments']);
        Department::create(['name'=>$request->name]);
        return redirect()->route('department.index');
    }
}
