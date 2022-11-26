@extends('admin.layout')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Detail Product
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>ID Product: </b>{{$Product->id_product}}</li>           
                    <li class="list-group-item"><b>Foto: </b><img width="100px" src="{{ asset('storage/' .$Product->foto)}}">
                    <li class="list-group-item"><b>Nama Product: </b>{{$Product->nama_product}}</li>
                    <li class="list-group-item"><b>Merk: </b>{{$Product->merk}}</li>
                    <li class="list-group-item"><b>Harga Beli: </b>{{$Product->harga_beli}}</li>
                    <li class="list-group-item"><b>Harga Jual: </b>{{$Product->harga_jual}}</li>
                    <li class="list-group-item"><b>Stok: </b>{{$Product->stok}}</li>
                    </ul>
                    </div>
            <a class="btn btn-success mt-3" href="{{ route('product.index') }}">Kembali</a>
            </div>
        </div>
   </div>
@endsection