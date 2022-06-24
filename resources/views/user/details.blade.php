@extends('user.layouts.template')

@section('content')
<div class="card details">
    <div class="container-fliud">
        <div class="wrapper row">
            <div class="preview col-md-6">
                <img width=100% src="#" />
                <!-- image by: https://www.adidas.com/us/ -->
            </div>

            <div class="details col-md-6 p-4">
                <h1 class=" product-title">Adidas Type {{ $data->brand }}</h1>
                <p class="product-description">Warna: {{ $data->warna }} </p>
                <p class="product-description">{{ $data->ukuran }} </p>
                <h4 class="price">Harga: <span>{{ $data->harga }}</span></h4>


                <div class="addToCart">
                    <button href="#" style="margin-top:40px;" class="btn btn-primary" role="button" aria-disabled="true" @if($data->stock == 0)
                        disabled
                        @endif>
                        Tambah Ke Keranjang
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>


@endsection