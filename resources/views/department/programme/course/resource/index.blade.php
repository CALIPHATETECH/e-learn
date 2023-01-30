<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <h3 class="text text-success text-center p-2">{{$course->title}} Uploaded Resources</h3>
    <table class="table">
    <thead>
        <tr>
            <th>S/N</th>
            <th>title</th>
            <th>Type</th>
            <th>
            @if(Auth::user()->role =='Admin')
            
            <button class="btn btn-success" data-toggle="modal" data-target="#upload_{{$course->id}}">New Resource</button>
            @endif
			</th>
            @include('department.programme.course.resource.create')
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach($course->resources as $resource)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$resource->title}}</td>
            <td>{{$resource->type->name}}</td>
            <td>
            @if($resource->type->name == 'Video')
            <video width="400" height="200" controls>
                <source src="{{$resource->display()}}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            
            @elseif($resource->type->name == 'Audio')
            <audio width="400" height="200" controls>
                <source src="{{$resource->display()}}">
                Your browser does not support the audio tag.
            </audio>
            @else
            <a href="{{$resource->display()}}" alt="" >View in PDF</a>
            @endif
            </td>
            <td>
            @if(Auth::user()->role == 'Admin')
            <button class="btn btn-success">Edit</button>
            <a href="{{route('department.programme.course.resource.delete',[$resource->id])}}"><button class="btn btn-success">Delete</button></a>
            @endif
            </td>
        </tr>
    @endforeach
    </tbody>
    </table>
</x-app-layout>
