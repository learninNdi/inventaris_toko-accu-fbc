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
        <form action="/products/{{ $product->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="name" class="form-label">Nama Produk</label>
                        <input value="{{ old('name', $product->name) }}" type="text" name="name" id="name" class="form-control
                        @error('name')
                            is-invalid
                        @enderror">
                        @error('name')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="price" class="form-label">Harga Produk</label>
                        <input value="{{ old('price', $product->price) }}" type="number" inputmode="numeric" name="price" id="price" class="form-control
                        @error('price')
                            is-invalid
                        @enderror">
                        @error('price')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="stock" class="form-label">Stok Produk</label>
                        <input value="{{ old('stock', $product->stock) }}" type="number" inputmode="numeric" name="stock" id="stock" class="form-control
                        @error('stock')
                            is-invalid
                        @enderror">
                        @error('stock')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="brand" class="form-label">Merk Produk</label>
                        <select name="brand" id="brand" class="form-control
                        @error('brand')
                            is-invalid
                        @enderror">
                            <option value="">Pilih Merk</option>
                            @foreach ($brands as $brand)
                                <option value="{{ $brand->id }}" {{ $brand->id === $product->brand->id ? 'selected' : '' }}>{{ $brand->name }}</option>
                            @endforeach
                        </select>
                        @error('brand')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="category" class="form-label">Kategori Produk</label>
                        <select name="category" id="category" class="form-control
                        @error('category')
                            is-invalid
                        @enderror">
                            <option value="">Pilih Kategori</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ $category->id === $product->category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="types" class="form-label">Tipe Produk</label>
                        <select name="types" id="types" class="form-control
                        @error('types')
                            is-invalid
                        @enderror">
                            <option value="">Pilih Tipe</option>
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}" {{ $type->id === $product->type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                            @endforeach
                        </select>
                        @error('types')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="vehicle" class="form-label">Kendaraan</label>
                        <select name="vehicle" id="vehicle" class="form-control
                        @error('vehicle')
                            is-invalid
                        @enderror">
                            <option value="">Pilih Kendaraan</option>
                            @foreach ($vehicles as $vehicle)
                                <option value="{{ $vehicle->id }}" {{ $vehicle->id === $product->vehicle->id ? 'selected' : '' }}>{{ $vehicle->name }}</option>
                            @endforeach
                        </select>
                        @error('vehicle')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-end">
                        <a href="/products" class="btn btn-sm btn-outline-secondary mr-2">Batal</a>
                        <button type="submit" class="btn btn-sm btn-warning">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
  </div>
@endsection
