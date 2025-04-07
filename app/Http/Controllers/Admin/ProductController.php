<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Type;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index() {
        if(!Auth::check()) {
            return redirect('/products');
        }

        return view('pages.products.index', ['title' => 'Dashboard']);
    }

    public function show() {
        $products = Product::with(['brand', 'category', 'type', 'vehicle'])->latest()->paginate(10);

        return view('pages.products.show', ['title' => 'List Produk', 'products' => $products]);
    }

    public function create() {
        $brands = Brand::all();
        $categories = Category::all();
        $types = Type::all();
        $vehicles = Vehicle::all();

        return view('pages.products.create', [
            'title' => 'Tambah Produk',
            'brands' => $brands,
            'categories' => $categories,
            'types' => $types,
            'vehicles' => $vehicles,
        ]);
    }

    public function edit($id) {
        $brands = Brand::all();
        $categories = Category::all();
        $types = Type::all();
        $vehicles = Vehicle::all();

        $product = Product::findOrFail($id);

        return view('pages.products.edit', [
            'title' => 'Ubah Produk',
            'brands' => $brands,
            'categories' => $categories,
            'types' => $types,
            'vehicles' => $vehicles,
            'product' => $product
        ]);
    }

    public function store(Request $request) {

        $request->validate([
            'name' => 'required|min:3',
            'price' => 'required',
            'stock' => 'required',
            'brand' => 'required',
            'category' => 'required',
            'types' => 'required',
            'vehicle' => 'required',
        ],
        [
            'name.required' => 'Nama produk harus diisi!',
            'name.min' => 'Nama produk minimal 3 karakter',
            'price.required' => 'Harga produk harus diisi!',
            'stock.required' => 'Stok produk harus diisi!',
            'brand.required' => 'Merk produk harus diisi!',
            'category.required' => 'Kategori produk harus diisi!',
            'types.required' => 'Tipe produk harus diisi!',
            'vehicle.required' => 'Jenis kendaraan produk harus diisi!',
        ]);

        Product::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'stock' => $request->input('stock'),
            'brand_id' => $request->input('brand'),
            'category_id' => $request->input('category'),
            'type_id' => $request->input('types'),
            'vehicle_id' => $request->input('vehicle'),
        ]);

        return redirect('/products')->with('success', 'Berhasil menambahkan produk');
    }

    public function update(Request $request, $id) {

        $request->validate([
            'name' => 'required|min:3',
            'price' => 'required',
            'stock' => 'required',
            'brand' => 'required',
            'category' => 'required',
            'types' => 'required',
            'vehicle' => 'required',
        ],
        [
            'name.required' => 'Nama produk harus diisi!',
            'name.min' => 'Nama produk minimal 3 karakter',
            'price.required' => 'Harga produk harus diisi!',
            'stock.required' => 'Stok produk harus diisi!',
            'brand.required' => 'Merk produk harus diisi!',
            'category.required' => 'Kategori produk harus diisi!',
            'types.required' => 'Tipe produk harus diisi!',
            'vehicle.required' => 'Jenis kendaraan produk harus diisi!',
        ]);

        Product::where('id', $id)->update([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'stock' => $request->input('stock'),
            'brand_id' => $request->input('brand'),
            'category_id' => $request->input('category'),
            'type_id' => $request->input('types'),
            'vehicle_id' => $request->input('vehicle'),
        ]);

        return redirect('/products')->with('success', 'Berhasil mengubah produk');
    }

    public function delete($id) {
        $product = Product::where('id', $id);
        $product->delete();

        return redirect('/products')->with('success', 'Berhasil menghapus produk');
    }
}
