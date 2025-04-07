@extends('layouts.main')

@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
      <h1>{{ $title }}</h1>
    </div>
</div>
@endsection

@section('content')
    @if(session('success'))
    <script>
        Swal.fire({
            title: "Berhasil!",
            text: "{{ session('success') }}",
            icon: "success"
        });
    </script>
    @endif
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        {{-- <div class="card">
            @if(auth()->check())
                <div class="card-header d-flex justify-content-end">
                    <a href="/products/create" class="btn btn-primary btn-sm">Tambah Produk</a>
                </div>
            @endif
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Produk</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Merk</th>
                        <th>Kategori</th>
                        <th>Tipe</th>
                        @if(auth()->check())
                            <th>#</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ ($products->currentPage()-1) * $products->perPage() + $loop->index + 1 }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->stock }}</td>
                            <td>{{ $product->brand->name }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td>{{ $product->type->name }}</td>
                            @if(auth()->check())
                                <td>
                                    <div class="d-flex">
                                        <a href="/products/edit/{{ $product->id }}" class="mr-2 btn btn-sm btn-warning">Ubah</a>
                                        <form action="/products/{{ $product->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger" type="submit">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            {{ $products->links('pagination::bootstrap-5') }}
          </div>
        </div> --}}

        <div class="card">
            @if(auth()->check())
                <div class="card-header d-flex justify-content-end">
                    <a href="/products/create" class="btn btn-primary btn-sm">Tambah Produk</a>
                </div>
            @endif
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Produk</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Merk</th>
                    <th>Kategori</th>
                    <th>Tipe</th>
                    @if(auth()->check())
                        <th>Aksi</th>
                    @endif
                </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ ($products->currentPage()-1) * $products->perPage() + $loop->index + 1 }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->stock }}</td>
                            <td>{{ $product->brand->name }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td>{{ $product->type->name }}</td>
                            @if(auth()->check())
                                <td>
                                    <div class="d-flex">
                                        <a href="/products/edit/{{ $product->id }}" class="mr-2 btn btn-sm btn-warning">Ubah</a>
                                        {{-- <form action="/products/{{ $product->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger" type="submit">Hapus</button>
                                        </form> --}}
                                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-delete-{{ $product->id }}">
                                            Hapus
                                        </button>
                                    </div>
                                </td>
                            @endif
                        </tr>
                        @include('layouts.components.delete-confirmation', ['title' => 'Produk', 'item' => $product, 'path' => 'products'])
                    @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                {{ $products->links('pagination::bootstrap-5') }}
            </div>
          </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
@endsection
