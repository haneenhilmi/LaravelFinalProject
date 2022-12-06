@extends('admin.layouts.master')

@section('title')
Show Stores
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
                <h1>Stores Table</h1>
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

                                    <th style="width: 60px;">Store Logo</th>
                                    <th>Store Name</th>
                                    <th>Store Address</th>
                                    <th style="width: 70px;">Edit</th>
                                    <th style="width: 40px;">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($stores as $store)
                                <tr>
                                    <td> <img src="{{$store->logo }}" width="200px" height="150px" alt="Card image cap" style="  border-radius: 5%;"></td>
                                    <td>{{$store->name}}</td>
                                    <td>{{$store->address}}</td>
                                    <td>
                                        <a href="{{route('stores.edit', $store->id)}}" class='btn btn-block btn-success btn-xs'>Edit</a>
                                    </td>
                                    <td>
                                        <form method="POST" action="{{route('stores.destroy', $store->id)}}">
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
                        {{$stores->links('pagination::bootstrap-4') }}

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