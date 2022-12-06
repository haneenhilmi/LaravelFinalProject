@extends('admin.layouts.master')

@section('title')
Transactions Report
@endsection

@section('css')
@endsection

@section('content')
<section class="content-header">
<div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Transactions Report </h1>
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

                                    <th>Product Name</th>
                                    <th>Number of Purshases</th>
                                    <th>Total price</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transactions as $transaction)
                                @php
                                $product_name= $transaction->product->name ?? null;
                                @endphp
                                <tr>
                                    <td>{{$product_name}} </td>
                                    <td>{{$transaction->count}} </td>
                                    <td>{{$transaction->sum}} </td>
                                    

                                    
                                    </form>
                                    </td>
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


</section>


@endsection
@section('js')
@endsection