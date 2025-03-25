@extends('layouts.template')

@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('kategori.store') }}">
            @csrf

            <div class="form-group">
                <label>Kode Kategori</label>
                <input type="text" class="form-control" name="kategori_kode" required>
            </div>

            <div class="form-group">
                <label>Nama Kategori</label>
                <input type="text" class="form-control" name="kategori_nama" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('kategori.index') }}" class="btn btn-default">Kembali</a>
        </form>
    </div>
</div>
@endsection

{{--@extends('layout.app')
{{-- Customize layout sections --}}
{{--@section('subtitle', 'Kategori')
{{--@section('content_header_title', 'Kategori')
{{--@section('content_header_subtitle', 'Create')

{{-- Content body: main page content --}}
{{--@section('content')
<div class="container">
    {{-- Tampilkan pesan error validasi --}}
    {{--@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Buat Kategori Baru</h3>
        </div>
        <form method="POST" action="/kategori">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="kategori_kode">Kode Kategori</label>
                    <input id="kategori_kode" 
                        type="text" 
                        name="kategori_kode"
                        class="@error('kategori_kode') is-invalid @enderror">
            
             @error('kategori_kode')
                 <div class="alert alert-danger">{{ $message }}</div>
             @enderror
                </div>
                <div class="form-group">
                    <label for="kategori_nama">Nama Kategori</label>
                    <input type="text" class="form-control" id="kategori_nama" name="kategori_nama" placeholder="Masukkan nama kategori">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection