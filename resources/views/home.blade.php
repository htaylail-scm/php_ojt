@extends('layouts.app')

@section('content')
<div class="container">
    <form action="" >
        <div class="row">
            <div class="col-auto">
                <input type="text" name="pname" class="form-control" id="pname" value="{{request()->get('pname','')}}">
            </div>
            <div class="col-auto">
                <input type="text" name="pseries" class="form-control" id="pseries" value="{{request()->get('pseries','')}}">
            </div>
            <div class="col-auto">
                <input type="text" name="pmodel" class="form-control" id="pmodel" value="{{request()->get('pmodel','')}}">
            </div>
            <div class="col-auto">
                <button class="btn btn-primary text-white" type="submit">Search</button>
            </div>
            <div class="col-auto">               
                <a class="btn btn-primary w-100 text-white" href="#">New Product</a>               
            </div>
        </div>
    </form>
    <div class="row mt-4">
        <h3 class="text-center">Product List</h3>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="{{asset('storage/img/iphone14.jpg')}}" class="card-img-top" alt="" />
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="{{asset('storage/img/iphone14.jpg')}}" class="card-img-top" alt="" />
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>


        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="{{asset('storage/img/iphone14.jpg')}}" class="card-img-top" alt="" />
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

        </div>
        <div class="col-md-12">
            <button class="text-center">Load More</button>
        </div>

    </div>
</div>
@endsection