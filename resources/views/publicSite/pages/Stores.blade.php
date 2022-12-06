@extends('publicSite.layouts.main')
@section('title')
Hexashop
@endsection




@section('content')

<div class="page-heading about-page-heading">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-content">
                    <h2>Hexashop</h2>
                    <span>Online Shopping</span>
                    <!-- <button>Shop now</button> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->

<!-- ***** About Area Starts ***** --><br><br><br>
   <div class="col-lg-12" style="margin-left: 35%;">
<form id="subscribe" action="{{Route('SearchProduct')}}" method="get">
                    @csrf
                    <div class="row">

                        <div class="col-lg-3">
                            <fieldset>
                                <input name="search" type="search" id="email" placeholder="Search For Procduct" required="" style="width: 100%;
    height: 44px;
    line-height: 44px;
    padding: 0px 15px;
    font-size: 13px;
    font-style: italic;
    font-weight: 500;
    color: #aaa;
    border-radius: 0px;
    border: 1px solid #7a7a7a;
    box-shadow: none;">
                            </fieldset>
                        </div>
                        <div class="col-lg-2">
                            <fieldset>
                                <button type="submit" id="form-submit" class="main-dark-button" style="width: 44px;
    height: 44px;
    display: inline-block;
    text-align: center;
    line-height: 44px;
    background-color: #2a2a2a;
    box-shadow: none;
    border: 1px solid transparent;
    color: #fff;
    transition:all 0.3s;"><i class="fa fa-search" style="margin: 0;
    padding: 0;
    border: 0;
    outline: 0"></i></button>
                            </fieldset>
                        </div>

                    </div>
                </form></div>
<section class="our-team" id="store">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Our Stores</h2>
                    <span>Details to details is what makes Hexashop different from the other themes.</span>
                </div>
         

            </div>

            @foreach ($stores as $store)
            <div class="col-lg-4">
                <div class="team-item">
                    <div class="thumb">
                        <div class="hover-effect">
                            <div class="inner-content">
                                <ul>
                                    <a href="{{Route('ShowStore',$store->id)}}">More Details</a>

                                </ul>
                            </div>
                        </div>
                        <img src="{{$store->logo }}" width="">
                    </div>
                    <div class="down-content">
                        <h4> {{$store->name}}</h4>
                        <span> <i class="fa fa-map-marker" aria-hidden="true"></i> {{$store->address}}</span>
                    </div>
                </div>
            </div>
            @endforeach
       
        </div>
        <br><br>
        <div class="">
                        <div class="pagination justify-content-center">
                        {{$stores->links('pagination::bootstrap-4') }}

                        </div>

</div>
    </div>
</section>
@endsection