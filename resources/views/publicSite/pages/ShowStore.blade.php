@extends('publicSite.layouts.main')
@section('title')
Show Store
@endsection


@section('content')
<!-- ***** Main Banner Area Start ***** -->

<div class="page-heading about-page-heading" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-content">
                    <h2>{{$store->name}}</h2>
                    <span>Awesome &amp; Creative HTML CSS layout by TemplateMo</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->


<!-- ***** Products Area Starts ***** -->
<section class="section" id="products">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Our Products</h2>
                    <span>Check out all of our products.</span>
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
           
        </div>
        <br><br>
        <div class="">
                        <div class="pagination justify-content-center">
                        {{$products->links('pagination::bootstrap-4') }}

                        </div>

</div>
    </div>
</section>
<!-- ***** Products Area Ends ***** -->
@endsection