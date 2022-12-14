<!-- Category Modal -->
<div class="modal fade" id="editModalLabel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Update Brand</h1>
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
                <form action="{{route('update-brand')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="brand_id" value="{{$brand->id}}">
                    <label for=BrandName">Brand Name</label>
                    <input type="text" class="form-control my-3" id="BrandName" name="brand_name" value="{{$brand->brand_name}}" placeholder="Brand Name">
                    <label for="BrandImage">Brand Image</label>
                    <input type="file" class="form-control my-3" id="BrandImage" name="brand_image">
                    <img src="{{asset($brand->brand_image)}}" style="width:50px; height:50px;" alt="">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" value="Submit" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


