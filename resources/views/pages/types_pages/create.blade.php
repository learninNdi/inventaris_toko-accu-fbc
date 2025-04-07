@extends('layouts.main')

@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
      <h1>{{ $title }}</h1>
    </div>
    <div class="col-sm-6 mb-3">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/">Beranda</a></li>
        {{-- <li class="breadcrumb-item active">Produk</li> --}}
      </ol>
    </div>
</div>
@endsection

@section('content')
  <div class="row">
    <div class="col">
        {{-- @if ($errors->any())
            @dd($errors->all())
        @endif --}}
        <form action="/types/store" method="POST">
            @csrf
            @method('POST')
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="name" class="form-label">Nama Tipe</label>
                        <input value="{{ old('name') }}" type="text" name="name" id="name" class="form-control
                        @error('name')
                            is-invalid
                        @enderror">
                        @error('name')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-end">
                        <a href="/types" class="btn btn-sm btn-outline-secondary mr-2">Batal</a>
                        <button type="submit" class="btn btn-sm btn-warning">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
  </div>
@endsection
