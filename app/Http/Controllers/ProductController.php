<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Product::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'stok' => 'required|integer',
            'jumlah_terjual' => 'required|integer',
            'tgl_transaksi' => 'required|date_format:d/m/Y',
            'jenis_barang' => 'required|string|max:255',
        ]);

        $tanggalTransaksi = Carbon::createFromFormat('d/m/Y', $request->get('tgl_transaksi'));

        $product = new Product([
            'nama_barang' => $request->get('nama_barang'),
            'stok' => $request->get('stok'),
            'jumlah_terjual' => $request->get('jumlah_terjual'),
            'tgl_transaksi' => $tanggalTransaksi,
            'jenis_barang' => $request->get('jenis_barang'),
        ]);

        $product->save();

        return response()->json($product);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
        return $product;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $validatedData = $request->validate([
            'nama_barang' => 'required|string|max:255',
            'stok' => 'required|integer',
            'jumlah_terjual' => 'required|integer',
            'tgl_transaksi' => 'required|date_format:d/m/Y',
            'jenis_barang' => 'required|string|max:255',
        ]);

        $product = Product::findOrFail($id);
        $product->update($validatedData);

        return response()->json($product);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $product = Product::find($id);

        if ($product) {
            $product->delete();
            return response()->json(['message' => 'Product deleted successfully']);
        } else {
            return response()->json(['message' => 'Product not found'], 404);
        }
    }
}
