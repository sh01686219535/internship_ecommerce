<!-- SubCategoryModal -->
<div class="modal fade" id="subCatModal" tabindex="-1" aria-labelledby="subCatModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="subCatModalLabel">Add Sub Category</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <h1 class="text-center">{{session('message')}}</h1>
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
                <form action="{{route('add-subCat')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="category_id" value="{{$category->id}}">
                    <label for="subCatName">Sub Category Name</label>
                    <input type="text" class="form-control my-2" id="subCatName" name="subCate_name" placeholder="Sub Category Name">
                    <label for="subCatImage">Sub Category Image</label>
                    <input type="file" class="form-control my-2" id="subCatImage" name="subCate_image">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" value="Submit" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
