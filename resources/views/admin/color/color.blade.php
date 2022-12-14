@extends('admin.master')
@section('title')
    Color
    @endsection
    @section('content')
    <!doctype html>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="my-5 text-center">Color</h1>
                    </div>
                    <div class="card-body">
                        <a href="" class="btn btn-success my-3" data-bs-toggle="modal" data-bs-target="#colorModal">Add Category</a>
                        <div class="table-data ">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">Sl</th>
                                    <th scope="col">Color Name</th>
                                    <th scope="col">Color Code</th>
                                    <th scope="col">Color Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $i = 1 @endphp
                                @foreach($colors as $color)
                                    <tr>
                                        <th scope="row">{{$i++}}</th>
                                        <td>{{$color->color_name}}</td>
                                        <td>{{$color->color_code}}</td>
                                        <td>{{$color->status==1?'Published' : 'Unpublished'}}</td>
                                        <td>
                                            @if($color->status==1)
                                                <a href="{{route('color-status',['id'=>$color->id])}}" class="btn btn-danger">Unpublished</a>
                                            @else
                                                <a href="{{route('color-status',['id'=>$color->id])}}" class="btn btn-success">Published</a>
                                            @endif
                                            <a href="{{route('color-edit',['id'=>$color->id])}}" class="btn btn-success" title="Edit"
                                               data-bs-toggle="modal"
                                               data-bs-target="#editColorModal"
                                            >Edit</a>
                                                <form action="{{route('color-delete')}}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="color_id" value="{{$color->id}}">
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
        @include('admin.include.colorModal')
        @include('admin.include.edit-color')
@endsection


