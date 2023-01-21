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
            <th>Programme</th>
            <th>Videios</th>
            <th>Audios</th>
            <th>PDFs</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach($programmes as $programme)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$programme->name}}</td>
            <td>{{count($programme->resources()['videos'])}}</td>
            <td>{{count($programme->resources()['audios'])}}</td>
            <td>{{count($programme->resources()['pdfs'])}}</td>
            <td><a href="{{route('programme.resource.index',[$programme->id])}}"><button class="btn btn-info">Resources</button></a> </td>
            <td><button data-toggle="modal" data-target="#upload_{{$programme->id}}" class="btn btn-primary">Upload Resources</button></td>
            @include('programme.resource.create')
        </tr>
    @endforeach
    </tbody>
    </table>
</x-app-layout>
