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
                <a href="/brands/create" class="btn btn-primary btn-sm">Tambah Merk</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Merk</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($brands as $brand)
                            <tr>
                                <td>{{ ($brands->currentPage()-1) * $brands->perPage() + $loop->index + 1 }}</td>
                                <td>{{ $brand->name }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="/brands/edit/{{ $brand->id }}" class="mr-2 btn btn-sm btn-warning">Ubah</a>
                                        {{-- <form action="/brands/{{ $brand->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger" type="submit">Hapus</button>
                                        </form> --}}
                                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-delete-{{ $brand->id }}">
                                            Hapus
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @include('layouts.components.delete-confirmation', ['title' => 'Merk', 'item' => $brand, 'path' => 'brands'])
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{ $brands->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
  </div>
@endsection
