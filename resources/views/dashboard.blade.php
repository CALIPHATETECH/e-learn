<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="row">
    @if(Auth::user()->role == 'Student')
    <div class="col-md-4 text-center"><h1>{{count(Auth::user()->programme->resources()['videos'])}} Videos</h1></div>
    <div class="col-md-4 text-center"><h1>{{count(Auth::user()->programme->resources()['audios'])}} Audios</h1></div>
    <div class="col-md-4 text-center"><h1>{{count(Auth::user()->programme->resources()['pdfs'])}} PDFs</h1></div>
    @else
        <div class="col-md-4 text-center">
            <h3 class="text text-success card-body shadow">
                {{count(App\Models\User::where('role','Student')->get())}} Student
            </h3>
        </div>
        <div class="col-md-4 text-center">
            <h3 class="text text-success card-body shadow">
                {{count(App\Models\Department::all())}} Departments
            </h3>
        </div>
        <div class="col-md-4 text-center">
            <h3 class="text text-success card-body shadow">
                {{count(App\Models\Programme::all())}} Programmes
            </h3>
        </div>
    @endif
    </div>
</x-app-layout>
