<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <h4 class="text text-success text-center p-4">{{$programme->name ?? ''}} Registered Courses</h4>
    <table class="table">
    <thead>
        <tr>
            <th>S/N</th>
            <th>Title</th>
            <th>Code</th>
            <th>Resources</th>
            <th><button class="btn btn-success" data-toggle="modal" data-target="#create">New Course</button></th>
            @include('department.programme.course.create')
        </tr>
    </thead>
    <tbody>
    
    @foreach($programme->courses as $course)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$course->title ?? ''}}</td>
            <td>{{$course->code ?? ''}}</td>
            <td>Resources</td>
            <td><button class="btn btn-success" data-toggle="modal" data-target="#edit_{{$course->id}}">Edit</button>
            <a href="{{route('department.programme.course.delete',[$course->id])}}" onlick="return confirm('Are you sure you to do this ?')">
            <button class="btn btn-success">Delete</button></a></td>
        </tr>
        @include('department.programme.course.edit')
    @endforeach
    </tbody>
    </table>
</x-app-layout>
