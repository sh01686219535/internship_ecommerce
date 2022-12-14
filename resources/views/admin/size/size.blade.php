@extends('admin.master')
@section('title')
    Size
@endsection
@section('content')
    <!doctype html>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="my-5 text-center">Size</h1>
                    </div>
                    <div class="card-body">
                        <a href="" class="btn btn-success my-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Size</a>
                        <div class="table-data ">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">Sl</th>
                                    <th scope="col">Size Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $i = 1 @endphp
                                @foreach($sizes as $item)
                                    <tr>
                                        <th scope="row">{{$i++}}</th>
                                        <td>{{$item->size_name}}</td>
                                        <td>
                                            <a href="{{route('size-edit',['id'=>$item->id])}}" class="btn btn-success" title="Edit"
                                               data-bs-toggle="modal"
                                               data-bs-target="#editModalsize"
                                            >Edit</a>
                                            <form action="{{route('size-delete')}}" method="post">
                                                @csrf
                                                <input type="hidden" name="size_id" value="{{$item->id}}">
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
    @include('admin.include.sizeModal')
    @include('admin.include.edit-size')
@endsection

