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
                <a href="/expenses/create" class="btn btn-primary btn-sm">Tambah Pengeluaran</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Deskripsi</th>
                            <th>Nominal</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($expenses as $expense)
                            <tr>
                                <td>{{ ($expenses->currentPage()-1) * $expenses->perPage() + $loop->index + 1 }}</td>
                                <td>{{ $expense->description }}</td>
                                <td>{{ $expense->nominal }}</td>
                                <td>{{ $expense->created_at }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="/expenses/edit/{{ $expense->id }}" class="mr-2 btn btn-sm btn-warning">Ubah</a>
                                        {{-- <form action="/expenses/{{ $expense->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger" type="submit">Hapus</button>
                                        </form> --}}
                                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-delete-{{ $expense->id }}">
                                            Hapus
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @include('layouts.components.delete-confirmation', ['title' => 'Pengeluaran', 'item' => $expense, 'path' => 'expenses'])
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{ $expenses->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
  </div>
@endsection
