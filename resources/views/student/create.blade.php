
<div class="modal fade" id="newStudent" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>STUDENT REGISTRATION</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('student.register')}}" method="post">
                    @csrf
                    <div class="form-group row">
                        <div class="col-md-3"><label for="">Name</label></div>
                        <div class="col-md-9">
                            <input type="text" name="name" id="" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3"><label for="">Email</label></div>
                        <div class="col-md-9">
                            <input type="email" name="email" id="" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3"><label for="">Password</label></div>
                        <div class="col-md-9">
                            <input type="password" name="password" id="" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3"><label for="">Admission No</label></div>
                        <div class="col-md-9">
                            <input type="text" name="admission_no" id="" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3"><label for="">Programme</label></div>
                        <div class="col-md-9">
                            <select name="programme" id="" class="form-control">
                            <option value="">Programme</option>
                            @foreach(App\Models\Programme::all() as $programme)
                                <option value="{{$programme->id}}">{{$programme->name}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <button class="btn btn-secondary">Register</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>