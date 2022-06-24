@extends('layouts.master')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Tambah Sepatu
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="/sepatu" id="myForm">
                    @csrf
                    <!-- <div class="form-group">
                        <label for="Id">Id</label>
                        <input type="text" name="Id" class="form-control" id="Id" aria-describedby="Id">
                    </div> -->
                    <div class="form-group">
                        <label for="brand">Brand</label>
                        <input type="brand" name="brand" class="form-control" id="brand" aria-describedby="brand">
                    </div>
                    <div class="form-group">
                        <label for="warna">Warna</label>
                        <input type="warna" name="warna" class="form-control" id="warna" aria-describedby="warna">
                    </div>
                    <div class="form-group">
                        <label for="ukuran">Ukuran</label>
                        <input type="ukuran" name="ukuran" class="form-control" id="ukuran" aria-describedby="ukuran">
                    </div>

                    <div class="form-group">
                        <label for="Harga">Harga</label>
                        <input type="Harga" name="harga" class="form-control" id="Harga" aria-describedby="Harga">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection