@extends('components.master')
@section('title', 'Apartments')

@section('content')
    <div class="container mb-5">
        <div class="mb-2 text-center"><h1 class="font-weight-bold " style="color:white">APARTMENT</h1></div>
        <div class="row row-cols-1 row-cols-md-2 mt-5">
            <div class="col mb-4">
                <div class="card">
                <img src="{{asset('image/image3.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Studio 25 m2 Fully Furnished</h5>
                    <p class="card-text">Tower/Floor/View: Ruby/7/City view <br>
                        Size: 25 m2 <br> 
                        Bedroom: Studio <br>
                        Bathroom: 1 <br>
                </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                <img src="{{asset('image/image2.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">2 BR - 47m2</h5>
                    <p class="card-text">Tower/Floor/View: Jade A/09/Pool <br>
                        Size: 47 m2 <br> Bedroom: 2 <br>
                        Bathroom: 1
                        </p>
                </div>
                </div>
            </div>
            </div>
    </div>

@endsection