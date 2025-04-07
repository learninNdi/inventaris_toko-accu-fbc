@extends('layouts.main')

@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
      <h1>{{ $title }}</h1>
    </div>
  </div>
@endsection

@section('content')
{{-- <form class="mx-auto col-lg-6">
    <div class="text-center">
        <div class="mb-3">
            <label for="search" class="form-label">Cari Produk</label>
            <input type="text" autocomplete="off" class="form-control" id="search" aria-describedby="searchProduct">
        </div>
      <div class="col text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form> --}}
@endsection
