<!-- Category Modal -->
<div class="modal fade" id="editColorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Update Color</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h3 class="text-center text-success">{{session('message')}}</h3>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="modal-body">
                <form action="{{route('update-color')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="color_id" value="{{$color->id}}">
                    <label for=colorName">Color Name</label>
                    <input type="text" class="form-control my-3" id="colorName" name="color_name" value="{{$color->color_name}}" placeholder="Color Name">
                    <label for="colorCode">Color Code</label>
                    <input type="text" class="form-control my-3" id="colorCode" name="color_code" value="{{$color->color_code}}" placeholder="Color Code">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" value="Submit" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


