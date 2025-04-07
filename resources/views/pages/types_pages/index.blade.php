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
                <a href="/types/create" class="btn btn-primary btn-sm">Tambah Tipe</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tipe</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($types as $type)
                            <tr>
                                <td>{{ ($types->currentPage()-1) * $types->perPage() + $loop->index + 1 }}</td>
                                <td>{{ $type->name }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="/types/edit/{{ $type->id }}" class="mr-2 btn btn-sm btn-warning">Ubah</a>
                                        {{-- <form action="/types/{{ $type->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger" type="submit">Hapus</button>
                                        </form> --}}
                                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-delete-{{ $type->id }}">
                                            Hapus
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @include('layouts.components.delete-confirmation', ['title' => 'Tipe', 'item' => $type, 'path' => 'types'])
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{ $types->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
  </div>
@endsection
