<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Programme;

class CourseController extends Controller
{
    public function index($programmeId)
    {
        return view('department.programme.course.index',['programme'=>Programme::find($programmeId)]);
    }

    public function update(Request $request, $courseId)
    {
        $request->validate([
            'title'=>'required',
            'code'=>'required',
            ]);
        $course = Course::find($courseId);
        $course->update([
            'title'=>$request->title,
            'code'=>$request->code,
            ]);
        return redirect()->route('department.programme.course.index',[$course->programme->id]);
    }

    public function delete($courseId)
    {
        $course = Course::find($courseId);
        $course->delete();
        return redirect()->route('department.programme.course.index',[$course->programme->id]);
    }

    public function register(Request $request, $programmeId)
    {
        
        $request->validate([
            'title'=>'required|unique:courses',
            'code'=>'required|unique:courses',
            ]);
        Programme::find($programmeId)->courses()->create([
            'title'=>$request->title,
            'code'=>$request->code,
            ]);
        return redirect()->route('department.programme.course.index',[$programmeId]);
    }
}
