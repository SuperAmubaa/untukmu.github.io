@extends('page.index')
@section('konten')
    <h3 class="mt-3">Detail Data Lapangan</h3>
    @foreach ($ar_lapangan as $l)
        <div class="card" style="width: 22rem;">
            @php
            if(!empty($l->foto)) {
            @endphp
                <img src="{{ asset('images/lapangan')}}/{{ $l->foto }}"/>
            @php
            } else {
            @endphp
                <img src="{{ asset('images')}}/no_picture.png"/>
            @php
            }
            @endphp
            <div class="card-body">
                <h5 class="card-title" style="font-size: 24px; font-weight: 600;">{{ $l->nama }}</h5>
                <p class="card-text">
                    Nama Pemilik : {{ $l->np }}
                    <br/>Nama Penyewa : {{ $l->team }}
                    <br/>Jenis Lapangan : {{ $l->jl }}
                    <br/>Tanggal : {{ $l->tanggal }}
                    <br/>Alamat : {{ $l->alamat }}
                </p>
                <a href="{{ url('/lapangan') }}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    @endforeach
@endsection