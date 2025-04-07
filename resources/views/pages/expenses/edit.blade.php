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
        <form action="/expenses/update/{{ $expense->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="description" class="form-label">Deskripsi Pengeluaran</label>
                        <textarea name="description" id="description" class="form-control
                        @error('description')
                            is-invalid
                        @enderror">{{ old('description', $expense->description) }}</textarea>
                        @error('description')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nominal" class="form-label">Nominal Pengeluaran</label>
                        <input value="{{ old('nominal', $expense->nominal) }}" type="number" inputmode="numeric" name="nominal" id="nominal" class="form-control
                        @error('nominal')
                            is-invalid
                        @enderror">
                        @error('nominal')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-end">
                        <a href="/expenses" class="btn btn-sm btn-outline-secondary mr-2">Batal</a>
                        <button type="submit" class="btn btn-sm btn-warning">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
  </div>
@endsection
