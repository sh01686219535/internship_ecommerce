<!-- Edit Category Modal -->
<div class="modal fade" id="editModalLabel" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-center" id="editModalLabel">Edit Category</h1>
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
                <form action="{{route('update-category')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="category_id" value="{{$category->id}}">
                    <label for="catName">Category Name</label>
                    <input type="text" class="form-control my-3" id="catName" name="category_name" value="{{$category->category_name}}" placeholder="category Name">
                    <label for="catImage">Category Image</label>
                    <input type="file" class="form-control my-3" id="catImage" name="category_image">
                    <img src="{{asset($category->category_image)}}" style="width:50px; height:50px;" alt="">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" value="Submit" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
