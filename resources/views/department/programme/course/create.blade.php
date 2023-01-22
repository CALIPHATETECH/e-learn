
<div class="modal fade" id="create" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>REGISTER NEW COURSE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" action="{{route('department.programme.course.register',[$programme->id])}}" method="post">
                    @csrf
                    <div class="form-group row">
                        <div class="col-md-3"><label for="">Course Title</label></div>
                        <div class="col-md-9">
                            <input type="text" name="title" value="{{old('title')}}"id="" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3"><label for="">Course Code</label></div>
                        <div class="col-md-9">
                            <input type="text" name="code" value="{{old('code')}}"id="" class="form-control">
                        </div>
                    </div>
                    <button class="btn btn-success">REGISTER</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>