@extends('admin.layouts.master')

@section('title')
Create Store
@endsection

@section('css')
@endsection

@section('content')
<div class="container">
    @foreach ( $errors->all() as $msg)
    <div class="alert alert-danger">{{ $msg }}</div>
    @endforeach
    @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{session()->get('message')}}
        </div>
        @endif
    <div class="card card-primary">
       
        <div class="card-header">
            <h3 class="card-title">Create Store</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{Route('stores.store')}}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputName">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="exampleInputAddress">Address</label>
                    <input type="text" name="address" class="form-control">
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
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
    @endsection

    @section('js')
    @endsection