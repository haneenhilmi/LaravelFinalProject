@extends('publicSite.layouts.main')
@section('title')
Hexashop
@endsection




@section('content')
<br><br>
<section class="section" id="products">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Search Reasults </h2>
                </div>
            </div>
        </div>
    </div>
<div class="container">
        <div class="row">
            @foreach ($products as $product)
            <div class="col-lg-4">
                <div class="item">
                    <div class="thumb">
                        <div class="hover-content">
                            <ul>
                                <li><a href="{{Route('ShowProduct',$product->id)}}"><i class="fa fa-eye"></i></a></li>

                            </ul>
                        </div>
                        <img src="{{$product->image }}" alt="">
                    </div>
                    <div class="down-content">
                        <h4>{{$product->name}}</h4>
                        <span>
                            @if($product->flag==1)
                            Discount Price: ${{$product->discount_price}}
                        </span>
                        <span style="text-decoration: line-through;">  Base Price: ${{$product->base_price}}</span>


                        @else
                        <span>
                           Price: {{$product->discount_price}}
                            @endif
                        </span>

                    </div>
                </div>
            </div>

            @endforeach
            <div class="col-lg-12">
                <div class="pagination justify-content-center">

                </div>
            </div>
        </div>
    </div>
    </section>
<!-- ***** Products Area Ends ***** -->
@endsection