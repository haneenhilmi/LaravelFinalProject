@extends('admin.layouts.master')

@section('title')
Update Store
@endsection

@section('css')
@endsection

@section('content')
<div class="card card-primary">
    @if(session()->has('message'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        {{session()->get('message')}}
    </div>
    @endif
    <div class="card-header">
        <h3 class="card-title">Edit Store</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{Route('stores.update', $store->id)}}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input type="text" name="name" class="form-control" value="{{ $store->name }}">
            </div>

            <div class="form-group">
                <label for="exampleInputAddress">Address</label>
                <input type="text" name="address" class="form-control" value="{{$store->address}}">
            </div>


            <div class="form-group">
                <label for="exampleInputFile">Logo</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="logo">
                        <label class="custom-file-label" for="exampleInputFile">Choose Logo</label>
                    </div>

                </div>
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
@endsection

@section('js')
@endsection