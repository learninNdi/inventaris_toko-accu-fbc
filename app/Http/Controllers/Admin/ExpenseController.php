<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index() {
        $expenses = Expense::latest()->paginate(10);
        $title = "List Pengeluaran";

        return view('pages.expenses.index', compact('expenses', 'title'));
    }

    public function create() {
        $title = "Tambah Pengeluaran";

        return view('pages.expenses.create', compact('title'));
    }

    public function edit($id) {
        $expense = Expense::find($id);
        $title = 'Ubah Pengeluaran';

        return view('pages.expenses.edit', compact('expense', 'title'));
    }

    public function store(Request $request) {

        $request->validate([
                'description' => 'required',
                'nominal' => 'required'
            ],
            [
                'description.required' => 'Deskripsi pengeluaran harus diisi!',
                'nominal.required' => 'Nominal merk harus diisi!'
            ]
        );

        Expense::create([
            'description' => $request->input('description'),
            'nominal' => $request->input('nominal'),
        ]);

        return redirect('/expenses')->with('success', 'Berhasil menambahkan pengeluaran');
    }

    public function update(Request $request, $id) {

        $request->validate([
            'description' => 'required',
            'nominal' => 'required'
        ],
        [
            'description.required' => 'Deskripsi pengeluaran harus diisi!',
            'nominal.required' => 'Nominal merk harus diisi!'
        ]
    );

        Expense::where('id', $id)->update([
            'description' => $request->input('description'),
            'nominal' => $request->input('nominal'),
        ]);

        return redirect('/expenses')->with('success', 'Berhasil mengubah pengeluaran');
    }

    public function delete($id) {
        $brand = Expense::where('id', $id);
        $brand->delete();

        return redirect('/expenses')->with('success', 'Berhasil menghapus pengeluaran');
    }
}
