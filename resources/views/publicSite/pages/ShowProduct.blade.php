@extends('publicSite.layouts.main')
@section('title')
Show Store
@endsection

<style>
    input:hover{
color: white;
    }
</style>

@section('content')
<br><br><br><br>
    <section class="section" id="product" >
        <div class="container" style="margin-left: 235px;">
            <div class="row" >
                <div class="col-lg-8">
                <div class="left-images" >
                    <img src="{{$product->image}}" width="200px" height="400px" alt="" style="  border-radius: 5%;">
                </div>
            </div>
            <div class="col-lg-4" style=" margin-top: 20px; margin-left: -350px">
                <div class="right-content" >
                    <h4>{{$product->name}}</h4>
                 
                    <span>{{$product->description}}</span>
                    
                    <br><br>
                    <div class="total">
                        <h4 style="color:black ;">Price: $@if($product->flag==0)
                            {{$product->base_price}}
                            @else
                            {{$product->discount_price}}
                            @endif</h4>
                          
                                           
                                           
                        <div class="main-border-button">
                        <form method="POST" action="{{Route('AddToCart', $product->id)}}">
                        @csrf
                         <a>   <input type="submit" value="Add To Cart" style="border: none; background: transparent;"></a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
@endsection