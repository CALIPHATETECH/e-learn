
<div class="modal fade" id="upload_{{$course->id}}" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>UPLOAD PROGRAMME RESOURCE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" action="{{route('department.programme.course.resource.register',[$course->id])}}" method="post">
                    @csrf
                    <div class="form-group row">
                        <div class="col-md-3"><label for="">Choose File</label></div>
                        <div class="col-md-9">
                            <input type="file" name="material" id="" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3"><label for="">Type</label></div>
                        <div class="col-md-9">
                            <select name="type" id="" class="form-control">
                            <option value="">File Type</option>
                            @foreach(App\Models\Type::all() as $type)
                                 <option value="{{$type->id}}">{{$type->name}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3"><label for="">Resource Title</label></div>
                        <div class="col-md-9">
                            <input type="text" name="title" id="" class="form-control">
                        </div>
                    </div>
                    <button class="btn btn-secondary">UPLOAD</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>