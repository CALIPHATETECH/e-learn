
<div class="modal fade" id="edit_{{$department->id}}" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>EDIT DEPARTMEN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" action="{{route('department.update',[$department->id])}}" method="post">
                    @csrf
                    
                    
                    <div class="form-group row">
                        <div class="col-md-3"><label for="">Department Name</label></div>
                        <div class="col-md-9">
                            <input type="text" name="name" value="{{$department->name ?? ''}}"id="" class="form-control">
                        </div>
                    </div>
                    <button class="btn btn-success">UPDATE</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>