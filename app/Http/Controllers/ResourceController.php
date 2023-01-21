<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Upload\FileUpload;
use App\Models\Material;
use App\Models\Programme;

class ResourceController extends Controller
{
    use FileUpload;

    public function register(Request $request, $programmeId)
    {
        $programme = Programme::find($programmeId);
        $material = Material::firstOrCreate([
            'title'=>$request->title,
            'type_id'=>$request->type,
            ]);
        $this->storeFile($material,'material', $request->material, 'Material/'.$material->type->name.'/');
        $programme->programmeMaterials()->create(['material_id'=>$material->id]);
        return redirect()->route('programme.index');
    }

    public function index($programmeId)
    {
       return view("programme.resource.index",['programme'=>Programme::find($programmeId)]);
    }
}
