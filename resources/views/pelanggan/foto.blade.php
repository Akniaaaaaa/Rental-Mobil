@extends('layout_admin/main2')

@section('title','Car')
@section('title','Data Mobil')

@section('container')

<div class="container">
    <div class="container">
        {{-- <div class="card"> --}}
            <center>
            <img src="{{ asset('storage/' . $pelanggan->gambar) }}"  style="width: 600px; height: 600px;">
        </center>
        {{-- </div> --}}
    </div>
</div>
@endsection