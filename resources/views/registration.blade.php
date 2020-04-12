@extends('components.master')
@section('title', 'Registration')
@section('content')
<div class="container pt-5 pb-5 bg-light rounded" style="margin-bottom: 90px"  >
    <div class="row ">
        <div class="col-6 text-center mt-5">
            <img src="{{asset('image/logo-gateway-3@2x.png')}}" height="300" width="370">
        </div>
        <div class="col-6 mt-5 ">
            <h3 class="text-center mb-4">Isi Formulir Ini Dengan Lengkap</h3>
            <form method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Lengkap">
                    <input type="text" class="form-control mt-2 mb-2" id="formGroupExampleInput2" placeholder="No Hp Aktif">
                    <input type="text" class="form-control mt-2 mb-2" id="formGroupExampleInput2" placeholder="Email">
                    <input type="text" class="form-control" id="inputAddress" placeholder="Alamat lengkap">
                    <a href="/#" class="btn btn-primary mt-5">Daftar</a>
                </div>
                
                </form>
        </div>
    </div>   
</div>
@endsection