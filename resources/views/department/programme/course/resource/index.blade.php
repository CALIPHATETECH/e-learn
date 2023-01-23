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
            <th><button class="btn btn-success" data-toggle="modal" data-target="#upload_{{$course->id}}">New Resource</button></th>
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
                <source src="{{Storage::url($resource->link)}}}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            
            @elseif($resource->type->name == 'Audio')
            <audio width="400" height="200" controls>
                <source src="{{Storage::url($resource->link)}}}" type="audio/mp4">
                Your browser does not support the audio tag.
            </audio>
            @else
            <a href="{{Storage::url($resource->link)}}" alt="" >View in PDF</a>
            @endif
            </td>
            <td>
            <button class="btn btn-success">Edit</button>
            <button class="btn btn-success">Delete</button>
            </td>
        </tr>
    @endforeach
    </tbody>
    </table>
</x-app-layout>
