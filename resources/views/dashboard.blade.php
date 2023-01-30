<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="row">
    @if(Auth::user()->role == 'Student')
        @foreach(Auth::user()->programme->courses as $course)
            <div class="col-md-4 text-center">
                <a href="{{route('department.programme.course.resource.index',[$course->id])}}">
                    <div class="card-body shadow">
                        <h5>{{$course->code}}</h5>
                        <h6>{{count($course->videos())}} Videos</h6>
                        <h6>{{count($course->audios())}} Audios</h6>
                        <h6>{{count($course->pdfs())}} PDFs</h6>
                    </div>
                </a>
            </div>
        @endforeach
    @else
        <div class="col-md-4 text-center">
            <div class="card-body shadow">
                <h3 class="text text-success">
                    {{count(App\Models\User::where('role','Student')->get())}} Student
                </h3>
            </div>
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
