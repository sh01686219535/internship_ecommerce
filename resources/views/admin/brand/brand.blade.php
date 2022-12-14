@extends('admin.master')
@section('title')
    Brand
@endsection
@section('content')
    <!doctype html>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="my-5 text-center">Brand</h1>
                    </div>
                    <div class="card-body">
                        <a href="" class="btn btn-success my-3" data-bs-toggle="modal" data-bs-target="#brandModal">Add Brand</a>
                        <div class="table-data ">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">Sl</th>
                                    <th scope="col">Brand Name</th>
                                    <th scope="col">Brand Image</th>
                                    <th scope="col">Brand Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $i = 1 @endphp
                                @foreach($brands as $brand)
                                    <tr>
                                        <th scope="row">{{$i++}}</th>
                                        <td>{{$brand->brand_name}}</td>
                                        <td>
                                            <img src="{{asset($brand->brand_image)}}" style="width:50px; height:50px;" alt="">
                                        </td>
                                        <td>{{$brand->status==1?'Published' : 'Unpublished'}}</td>
                                        <td>
                                            @if($brand->status==1)
                                                <a href="{{route('brand-status',['id'=>$brand->id])}}" class="btn btn-danger">Unpublished</a>
                                            @else
                                                <a href="{{route('brand-status',['id'=>$brand->id])}}" class="btn btn-success">Published</a>
                                            @endif
                                            <a href="{{route('brand-edit',['id'=>$brand->id])}}" class="btn btn-success" title="Edit"
                                               data-bs-toggle="modal"
                                               data-bs-target="#editModalLabel"
                                            >Edit</a>
                                            <form action="{{route('brand-delete')}}" method="post">
                                                @csrf
                                                <input type="hidden" name="brand_id" value="{{$brand->id}}">
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
    @include('admin.include.brandModal')
    @include('admin.include.edit-brand')
@endsection

