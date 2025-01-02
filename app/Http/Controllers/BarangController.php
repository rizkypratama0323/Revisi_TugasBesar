<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|max:255',
            'kode' => 'required|max:255',
            'harga' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Save the image and store its path
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $validated['image'] = $imagePath;
        }

        // Save data to the database
        Barang::create($validated);

        return response()->json(['message' => 'Data berhasil disimpan!'], 200);
    }
    public function index()
{
    $barang = \App\Models\Barang::all(); // Mengambil semua data barang
    return view('barang.index', compact('barang')); // Kirim data ke view
}
}
