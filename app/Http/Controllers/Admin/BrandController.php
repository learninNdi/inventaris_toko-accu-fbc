<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    public function index() {

        $brands = Brand::latest()->paginate(10);
        $title = "List Merk";

        return view('pages.brands.index', compact('brands', 'title'));
    }

    public function create() {
        $title = "Tambah Merk";

        return view('pages.brands.create', compact('title'));
    }

    public function edit($id) {
        $brand = Brand::find($id);
        $title = 'Ubah Merk';

        return view('pages.brands.edit', compact('brand', 'title'));
    }

    public function store(Request $request) {

        $request->validate([
            'name' => 'required|unique:brands,name',
        ],
        [
            'name.required' => 'Nama merk harus diisi!',
            'name.unique' => 'Nama merk sudah ada!'
        ]
    );

        $slug = Str::slug($request->input('name'));

        Brand::create([
            'name' => $request->input('name'),
            'slug' => $slug,
        ]);

        return redirect('/brands')->with('success', 'Berhasil menambahkan merk');
    }

    public function update(Request $request, $id) {

        $request->validate([
                'name' => 'required|unique:brands,name',
            ],
            [
                'name.required' => 'Nama merk harus diisi!',
                'name.unique' => 'Nama merk sudah ada!'
            ]
        );

        $slug = Str::slug($request->input('name'));

        Brand::where('id', $id)->update([
            'name' => $request->input('name'),
            'slug' => $slug,
        ]);

        return redirect('/brands')->with('success', 'Berhasil mengubah merk');
    }

    public function delete($id) {
        $brand = Brand::where('id', $id);
        $brand->delete();

        return redirect('/brands')->with('success', 'Berhasil menghapus merk');
    }
}
