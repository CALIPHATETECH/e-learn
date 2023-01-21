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
        </tr>
    </thead>
    <tbody>
    @foreach($programmes as $programme)
        <tr>
            <th>{{$loop->iteration}}</th>
            <th>{{$programme->name}}</th>
            <th>{{0}}</th>
            <th>{{0}}</th>
            <th>{{0}}</th>
        </tr>
    @endforeach
    </tbody>
    </table>
</x-app-layout>
