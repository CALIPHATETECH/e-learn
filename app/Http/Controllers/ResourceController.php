<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Upload\FileUpload;
use App\Models\Course;
use App\Models\Resource;

class ResourceController extends Controller
{
    use FileUpload;

    public function register(Request $request, $courseId)
    {
        $course = Course::find($courseId);
        
        $resource = $course->resources()->create([
            'title'=>$request->title,
            'type_id'=>$request->type,
        ]);

        $this->storeFile($resource,'link', $request->material, 'Resource/'.$course->code.'/'.$resource->type->name.'/');
    
        return redirect()->route('department.programme.course.resource.index',[$courseId]);
    }

    public function index($courseId)
    {
       return view("department.programme.course.resource.index",['course'=>Course::find($courseId)]);
    }
}
