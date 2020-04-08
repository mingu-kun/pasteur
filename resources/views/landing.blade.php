@extends('components.master')
@section('title', 'GateWay Pasteur Bandung')
@section('content')
    <div class="jumbotron text-center bg-transparent">
        <div class="container">
            <h1 class="d4">GATEWAY PASTEUR <br>BANDUNG</h1>
            <p class="lead"> Merupakan sebuah hunian modern berupa Apartment dengan konsep <br> <strong>One Stop Living</strong> yang memiliki design, kualitas bangunan, lokasi, dan fasilitas yang terbaik. <br> Selain itu juga memiliki nilai investasi yang sangat menguntungkan.</p>
            <div class="container mt-4">
                <span><a class="btn btn-success btn-lg mb-3" href="{{'/registation'}}" role="button">Registrasi</a></span>
            <span><a class="btn btn-secondary btn-lg mb-3" href="{{'/contactus'}}" role="button">Contact us</a></span>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container text-center">
        <h3 class="d4 mb-5">Gallery</h3>
        <div id="bnrH" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#bnrH" data-slide-to="0" class="active"></li>
                <li data-target="#bnrH" data-slide-to="1"></li>
                <li data-target="#bnrH" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="{{asset('image/gbr1.png')}}" class="d-block w-100">
                </div>
                <div class="carousel-item">
                <img src="{{asset('image/gbr1.png')}}" class="d-block w-100">
                </div>
                <div class="carousel-item">
                <img src="{{asset('image/gbr1.png')}}" class="d-block w-100">
                </div>
            </div>
            <a class="carousel-control-prev" href="#bnrH" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">back</span>
            </a>
            <a class="carousel-control-next" href="#bnrH" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
    </div>
    <section id="tipe">
        <div class=" mt-5">
            <div class="row justify-content-between">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                        <img src="..." class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                        </div>
                    </div>
                    </div>
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                        <img src="..." class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                        </div>
                    </div>
                    </div>
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                        <img src="..." class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                        </div>
                    </div>
                    </div>
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                        <img src="..." class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="weare">
        <div class="container ">
            <div class="row justify-content-between">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <img src="..." class="card-img" alt="...">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <img src="..." class="card-img" alt="...">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact-us mb-5">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-4 bg-white text-center pt-5 mr-2" height>
                    <img src="{{asset('image/jamal.jpg')}}" class="rounded-circle" height="170px" >
                    <div class="card-body">
                        <h5 class="card-title">Nama</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
                <div class=" col bg-white text-center pt-4">
                    <img id="img-logo" src="{{asset('image/logo-gateway-3@2x.png')}}" height="110" width="110"  >
                    <div id="map-container-google-1" class="z-depth-1-half map-container pt-2" >
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7921.999977889201!2d107.57426921170791!3d-6.890603185278134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e5d2d2e2be9b%3A0xe3becec157f9669f!2sApartemen%20Gateway%20Pasteur!5e0!3m2!1sid!2sid!4v1586357332266!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0; margin-top:20px" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <p>Jl. Gunung Batu No.203, Sukaraja, Kec. Cicendo, Kota Bandung, Jawa Barat 40175</p>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>

{{-- next update --}}
@endsection