<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <h4 class="text text-success text-center p-4">Registered Departments</h4>
    <table class="table">
    <thead>
        <tr>
            <th>S/N</th>
            <th>Name</th>
            <th>Programmes</th>
            <th><button class="btn btn-success" data-toggle="modal" data-target="#create">New Department</button></th>
            @include('department.create')
        </tr>
    </thead>
    <tbody>
    
    @foreach($departments as $department)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$department->name}}</td>
            <td><a href="{{route('department.programme.index',[$department->id])}}">
            {{count($department->programmes)}}</a></td>
            <td><button class="btn btn-success" data-toggle="modal" data-target="#edit_{{$department->id}}">Edit</button>
            <a href="{{route('department.delete',[$department->id])}}" onlick="return confirm('Are you sure you to do this ?')">
            <button class="btn btn-success">Delete</button></a></td>
        </tr>
        @include('department.edit')
    @endforeach
    </tbody>
    </table>
</x-app-layout>
