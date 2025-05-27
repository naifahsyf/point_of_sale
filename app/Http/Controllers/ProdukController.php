<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
  /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = Kategori::all()->pluck('nama_kategori', 'id_kategori');

        return view('produk.index', compact('kategori'));
    }

    public function data() {
        $produk = produk::orderBy('id_produk', 'desc')->get();

        return datatables()
        ->of($produk)
        ->addIndexColumn()
        ->addColumn('aksi', function($produk){
            return '
                <div class="btn-group">
                <button onclick="editForm(`'. route('produk.update', $produk->id_produk) .'`)" class="btn btn-xs btn-info "><i class=" fa fa-pencil"></i></button>
                <button onclick="deleteData(`'. route('produk.destroy', $produk->id_produk) .'`)"class="btn btn-xs btn-danger"><i class=" fa fa-trash"></i></button>
            </div>
                ';
        })
        ->rawColumns(['aksi'])
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $produk = produk::latest()->first();
        $request['kode_produk'] = 'p-'. tambah_nol_didepan($produk->id, 6);
        
        $produk = produk::create($request->all());

    return response()->json('Data berhasil disimpan', 200);

    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $produk = produk::find($id);

        return response()->json($produk);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
    $produk = produk::find($id);
    $produk->nama_produk = $request->nama_produk;
    $produk->update();

    return response()->json('Data berhasil diubah', 200);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $produk = produk::find($id);
        $produk->delete();

        return response(null, 204);
    }
}
