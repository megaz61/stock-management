<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\StockTransaction;
use Illuminate\Http\Request;

class StockTransactionController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $transactions = StockTransaction::with('product')->latest()->paginate(15);
        return view('admin.transactions.index', compact('products', 'transactions'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'type' => 'required|in:in,out',
            'quantity' => 'required|integer|min:1',
            'notes' => 'nullable',
        ]);

        $product = Product::findOrFail($validated['product_id']);

        // Update stock
        if ($validated['type'] === 'in') {
            $product->stock += $validated['quantity'];
        } else {
            if ($product->stock < $validated['quantity']) {
                return back()->with('error', 'Insufficient stock!');
            }
            $product->stock -= $validated['quantity'];
        }

        $product->save();

        StockTransaction::create($validated);

        return back()->with('success', 'Transaction recorded successfully');
    }
}
