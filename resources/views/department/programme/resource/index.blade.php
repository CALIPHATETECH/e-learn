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
            <th>title</th>
            <th>Type</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach($programme->programmeMaterials as $programmeMaterial)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$programmeMaterial->material->title}}</td>
            <td>{{$programmeMaterial->material->type->name}}</td>
            <td>
            @if($programmeMaterial->material->type->name == 'Video')
            <video src="{{Storage::url($programmeMaterial->material->material)}}}">Watch</video>
            @elseif($programmeMaterial->material->type->name == 'Audio')
            <audio src="{{Storage::url($programmeMaterial->material->material)}}}">Listing</audio>
            @else
            <a href="{{Storage::url($programmeMaterial->material->material)}}" alt="">View</a>
            @endif
            </td>
        </tr>
    @endforeach
    </tbody>
    </table>
</x-app-layout>
