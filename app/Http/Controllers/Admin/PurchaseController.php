<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function index() {
        $purchases = Purchase::latest()->paginate(10);
        $title = "List Pembelian";

        return view('pages.purchases.index', compact('purchases', 'title'));
    }

    public function create() {
        $title = "Tambah Pembelian";

        return view('pages.purchases.create', compact('title'));
    }
}
