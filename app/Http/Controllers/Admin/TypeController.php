<?php

namespace App\Http\Controllers\Admin;

use App\Models\Type;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TypeController extends Controller
{
    public function index() {

        $types = Type::latest()->paginate(10);
        $title = "List Tipe";

        return view('pages.types_pages.index', compact('types', 'title'));
    }

    public function create() {
        $title = "Tambah Tipe";

        return view('pages.types_pages.create', compact('title'));
    }

    public function edit($id) {
        $type = Type::find($id);
        $title = 'Ubah Tipe';

        return view('pages.types_pages.edit', compact('type', 'title'));
    }

    public function store(Request $request) {

        $request->validate([
            'name' => 'required|unique:types,name',
        ],
        [
            'name.required' => 'Nama kategori harus diisi!',
            'name.unique' => 'Nama kategori sudah ada!'
        ]
    );

        $slug = Str::slug($request->input('name'));

        Type::create([
            'name' => $request->input('name'),
            'slug' => $slug,
        ]);

        return redirect('/types')->with('success', 'Berhasil menambahkan tipe');
    }

    public function update(Request $request, $id) {

        $request->validate([
            'name' => 'required|unique:types,name',
        ],
        [
            'name.required' => 'Nama kategori harus diisi!',
            'name.unique' => 'Nama kategori sudah ada!'
        ]
    );

        $slug = Str::slug($request->input('name'));

        Type::where('id', $id)->update([
            'name' => $request->input('name'),
            'slug' => $slug,
        ]);

        return redirect('/types')->with('success', 'Berhasil mengubah tipe');
    }

    public function delete($id) {
        $type = Type::where('id', $id);
        $type->delete();

        return redirect('/types')->with('success', 'Berhasil menghapus tipe');
    }
}
