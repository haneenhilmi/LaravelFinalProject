@extends('admin.layouts.master')

@section('title')
Create Product
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
            <h3 class="card-title">Create Product</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{Route('products.store')}}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputName">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Store Name</label>
                    <select class="form-control" name="Store_id">
                        <option selected disabled>Choose Store...</option>
                        @foreach ($stores as $store)
                        <option value="{{$store->id}}">{{$store->name}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputName">Description</label>
                    <input type="text" name="description" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleInputName">Base Price</label>
                    <input type="text" name="base_price" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleInputName">Discount Price</label>
                    <input type="text" name="discount_price" class="form-control">
                </div>
                <div class="form-group">
                    <label>Flag</label>
                    <select class="form-control" name="flag">
                        <option selected disabled>Choose Falg...</option>
                        <option value="0">0-->Base Price</option>
                        <option value="1">1-->Discount Price</option>
                    </select>
                </div>


                <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image">
                            <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
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