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
  <div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header d-flex justify-content-end">
                <a href="/purchases/create" class="btn btn-primary btn-sm">Tambah Pembelian</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Total Produk</th>
                            <th>Total Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($purchases as $purchase)
                            <tr>
                                <td>{{ ($purchases->currentPage()-1) * $purchases->perPage() + $loop->index + 1 }}</td>
                                <td>{{ $purchase->created_at }}</td>
                                <td>{{ $purchase->product_total }}</td>
                                <td>{{ $purchase->price_total }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="/purchases/edit/{{ $purchase->id }}" class="mr-2 btn btn-sm btn-warning">Ubah</a>
                                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-delete-{{ $purchase->id }}">
                                            Hapus
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @include('layouts.components.delete-confirmation', ['title' => 'Pengeluaran', 'item' => $purchase, 'path' => 'purchases'])
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{ $purchases->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
  </div>
@endsection
