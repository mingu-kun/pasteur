@extends('components.master')
@section('title', 'GateWay Pasteur Bandung')
@section('content')
    <div class="jumbotron text-center bg-transparent">
        <div class="container">
            <h1 class="d4">GATEWAY PASTEUR <br>BANDUNG</h1>
            <p class="lead"> Merupakan sebuah hunian modern berupa Apartment dengan konsep <br> <strong>One Stop Living</strong> yang memiliki design, kualitas bangunan, lokasi, dan fasilitas yang terbaik. <br> Selain itu juga memiliki nilai investasi yang sangat menguntungkan.</p>
            <div class="container mt-4">
                <span><a class="btn btn-secondary btn-lg mb-3" href="#" role="button">Registrasi</a></span>
                <span><a class="btn btn-primary btn-lg mb-3" href="#" role="button">Contact us</a></span>
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
                <img src="{{asset('image/gbr1.png')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="{{asset('image/gbr1.png')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="{{asset('image/gbr1.png')}}" class="d-block w-100" alt="...">
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

    <section id="contact-us">
        <div class="container">
        <div class="card-deck">
            <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
            <div class="col-md-8 bg-white">
                <h1>maps</h1>
            </div>
            </div>
        </div>
    </section>


    


@endsection