@extends('admin.layouts.master')

@section('title')
Show Products
@endsection

@section('css')
@endsection

@section('content')
<section class="content-header">
    @foreach ( $errors->all() as $msg)
    <div class="alert alert-danger">{{ $msg }}</div>
    @endforeach
    @if(session()->has('message'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        {{session()->get('message')}}
    </div>
    @endif
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Products Table</h1>
            </div>

        </div>
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">


                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>

                                    <th style="width: 60px;">Product Image</th>
                                    <th>Product Name</th>
                                    <th>Store Name</th>
                                    <th>Description</th>
                                    <th>Base Price</th>
                                    <th>Discount Price</th>
                                    <th>Flag</th>
                                    <th style="width: 70px;">Edit</th>
                                    <th style="width: 40px;">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                @php
                                $store_name=$product->store->name ?? null;
                                @endphp
                                <tr>
                                    <td> <img src="{{$product->image }}" width="200px" height="200px" alt="Card image cap" style="  border-radius: 5%;"></td>
                                    <td>{{$product->name}}</td>
                                    <td>
                                   
                                        {{$store_name}}
                                      
                                    </td>
                                    <td>{{$product->description}}</td>
                                    <td>{{$product->base_price}}</td>
                                    <td>{{$product->discount_price}}</td>
                                    <td>@if ($product->flag == 0)
                                        {{ __('Base Price') }}
                                        @else
                                        {{ __('Discount Price') }}


                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('products.edit', $product->id)}}" class='btn btn-block btn-success btn-xs'>Edit</i></a>
                                    </td>
                                    <td>
                                        <form method="POST" action="{{route('products.destroy', $product->id)}}">
                                            @csrf
                                            @method('delete')
                                            <button class='btn btn-block btn-danger btn-xs' onclick="return confirm('Are you sure?')">Delete</button>
                                    </td>

                                    </form>
                                    </td>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>

                    <div class="card-footer ">
                        <div class="pagination justify-content-center">
                        {{$products->links('pagination::bootstrap-4') }}

                        </div>

</div>
                </div>


            </div>

        </div>
    </div>


</section>


@endsection
@section('js')
@endsection