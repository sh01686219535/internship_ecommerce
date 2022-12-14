@extends('admin.master')
@section('title')
    Category
@endsection
@section('content')
<!doctype html>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                  <h1 class="my-5 text-center">Category</h1>
              </div>
             <div class="card-body">
                 <a href="" class="btn btn-success my-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Category</a>
                 <div class="table-data ">
                     <table class="table table-bordered table-hover">
                         <thead>
                         <tr>
                             <th scope="col">Sl</th>
                             <th scope="col">Category Name</th>
                             <th scope="col">Category Image</th>
                             <th scope="col">Category Status</th>
                             <th scope="col">Action</th>
                         </tr>
                         </thead>
                         <tbody>
                         @php $i = 1 @endphp
                         @foreach($categories as $category)
                         <tr>
                             <th scope="row">{{$i++}}</th>
                             <td>{{$category->category_name}}</td>
                             <td>
                                 <img src="{{asset($category->category_image)}}" style="width:50px; height:50px;" alt="">
                             </td>
                             <td>{{$category->status==1?'Published' : 'Unpublished'}}</td>
                             <td>
                                 @if($category->status==1)
                                     <a href="{{route('cat-status',['id'=>$category->id])}}" class="btn btn-danger">Unpublished</a>
                                 @else
                                     <a href="{{route('cat-status',['id'=>$category->id])}}" class="btn btn-success">Published</a>
                                 @endif
                                 <a href="{{route('cat-edit',['id'=>$category->id])}}" class="btn btn-success" title="Edit"
                                    data-bs-toggle="modal"
                                    data-bs-target="#editModalLabel"
                                 >Edit</a>
                                     <form action="{{route('cat-delete')}}" method="post">
                                         @csrf
                                         <input type="hidden" name="category_id" value="{{$category->id}}">
                                         <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure delete this')">
                                     </form>
                             </td>
                         </tr>
                         @endforeach
                         </tbody>
                     </table>
                 </div>
             </div>
          </div>
            </div>
        </div>
    </div>

    <!-- Category Modal -->
    @include('admin.include.categoryModal')
    @include('admin.include.add-category')
@endsection
