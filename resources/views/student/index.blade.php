<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <table class="table">
    <thead>
        <tr>
            <th>S/N</th>
            <th>Student Name</th>
            <th>Student Email</th>
            <th>Admission No</th>
            <th>Programme of Study</th>
            <th><button class="btn btn-primary" data-toggle="modal" data-target="#newStudent">New Student</button></th>
        @include('student.create')
        </tr>
    </thead>
    <tbody>
    @foreach($students as $student)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->admission_no}}</td>
            <td>{{$student->programme->name}}</td>
        </tr>
    @endforeach
    </tbody>
    </table>
</x-app-layout>
