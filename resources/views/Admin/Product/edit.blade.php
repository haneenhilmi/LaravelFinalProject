@extends('admin.layouts.master')

@section('title')
Update Product
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
        <h3 class="card-title">Edit Product</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{Route('products.update', $product->id)}}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputName">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $product->name }}">
                </div>
                <div class="form-group">
                    <label>Store Name</label>
                    <select class="form-control" name="Store_id" >
                    
                    <option value="{{ $product->store_id }}"   selected> {{ $product->store->name?? null}}</option>
                    @foreach ($stores as $store)
                    <option value="{{$store->id}}">{{$store->name}}</option>
                    @endforeach             
                               
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputName">Description</label>
                    <input type="text" name="description" class="form-control" value="{{ $product->description}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputName">Base Price</label>
                    <input type="text" name="base_price" class="form-control" value="{{ $product->base_price}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputName">Discount Price</label>
                    <input type="text" name="discount_price" class="form-control" value="{{ $product->discount_price}}">
                </div>
                <div class="form-group">
                    <label>Flag</label>
                    <select class="form-control" name="flag" >
                        
                        @if ($product->flag == 0)
                                        <option value="0" selected>Base Price</option>
                                        <option value="1">Discount Price</option>
                                    @else
                                        <option value="0" >Base Price</option>
                                        <option value="1" selected>Discount Price</option>
                                    @endif
                      
                    </select>
                </div>


                <div class="form-group">
                    <label for="exampleInputFile">Image</label><br>
                    <img src="{{$product->image }}" width="200px" height="150px" alt="Card image cap">

                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image" >
                            <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
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