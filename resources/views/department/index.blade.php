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
            <th><button class="btn btn-success">New Department</button></th>
        </tr>
    </thead>
    <tbody>
    
    @foreach($departments as $department)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$department->name}}</td>
            <td>{{count($department->programmes)}}</td>
            <td><button class="btn btn-success">Edit</button></td>
            <td><button class="btn btn-success">Delete</button></td>
            
        </tr>
    @endforeach
    </tbody>
    </table>
</x-app-layout>
