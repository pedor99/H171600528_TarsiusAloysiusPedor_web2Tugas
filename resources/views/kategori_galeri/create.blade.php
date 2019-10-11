@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data</div>

                    <div class="card-body">
                        {!!  Form::open(['route'=> 'kategori_galeri.store','method'=>'post']) !!}
                            @include('kategori_galeri.form')
                        {!! Form::close() !!}

                    </div>
            </div>
        </div>
    </div>
</div>
@endsection