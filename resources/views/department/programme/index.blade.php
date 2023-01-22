<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <h4 class="text text-success text-center p-4">{{$department->name ?? ''}} Registered Programmes</h4>
    <table class="table">
    <thead>
        <tr>
            <th>S/N</th>
            <th>Name</th>
            <th>Courses</th>
            <th><button class="btn btn-success" data-toggle="modal" data-target="#create">New Programme</button></th>
            @include('department.programme.create')
        </tr>
    </thead>
    <tbody>
    
    @foreach($department->programmes as $programme)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$programme->name ?? ''}}</td>
            <td><a href="{{route('department.programme.course.index',[$programme->id])}}">
            {{count($programme->courses)}}</a></td>
            <td><button class="btn btn-success" data-toggle="modal" data-target="#edit_{{$programme->id}}">Edit</button>
            <a href="{{route('department.programme.delete',[$programme->id])}}" onlick="return confirm('Are you sure you to do this ?')">
            <button class="btn btn-success">Delete</button></a></td>
        </tr>
        @include('department.programme.edit')
    @endforeach
    </tbody>
    </table>
</x-app-layout>
