<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paginate = Product::orderBy('id_product', 'asc')->paginate(5);
        return view('product.index', ['paginate' => $paginate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_product' => 'required',
            'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:1024',
            'nama_product' => 'required',
            'merk' => 'required',
            'harga_beli' => 'required',
            'harga_jual' => 'required',
            'stok' => 'required',
        ]);

        $product = new Product;
        $product->id_product = $request->get('id_product');
        $product->foto = $request->file('foto')->store('images', 'public');
        $product->nama_product = $request->get('nama_product');
        $product->merk = $request->get('merk');
        $product->harga_beli = $request->get('harga_beli');
        $product->harga_jual = $request->get('harga_jual');
        $product->stok = $request->get('stok');


        //fungsi eloquent untuk menambah data
        Product::create($request->all());
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('product.index')
            ->with('success', 'Product Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_product)
    {
        //menampilkan detail data dengan menemukan/berdasarkan id_product
        $Product = Product::find($id_product);
        return view('product.detail', compact('Product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_product)
    {
        //menampilkan detail data dengan menemukan berdasarkan id_product untuk diedit
        $Product = Product::find($id_product);
        return view('product.edit', compact('Product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_product)
    {
        //melakukan validasi data
        $request->validate([
            'id_product' => 'required',
            'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:1024',
            'nama_product' => 'required',
            'merk' => 'required',
            'harga_beli' => 'required',
            'harga_jual' => 'required',
            'stok' => 'required',
        ]);

        $product = new Product;
        $product->id_product = $request->get('id_product');
        if($product->foto && file_exists(storage_path('app/public/'. $product->foto))){
            \Storage::delete('public/'. $product->foto);
        }
        $image_name = $request->file('foto')->store('images', 'public');
        $product->foto = $image_name;
        $product->nama_product = $request->get('nama_product');
        $product->merk = $request->get('merk');
        $product->harga_beli = $request->get('harga_beli');
        $product->harga_jual = $request->get('harga_jual');
        $product->stok = $request->get('stok');


        //fungsi eloquent untuk mengupdate data inputan kita
        Product::find($id_product)->update($request->all());
        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('product.index')
            ->with('success', 'Product Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_product)
    {
        //fungsi eloquent untuk menghapus data
        Product::find($id_product)->delete();
        return redirect()->route('product.index')
            ->with('success', 'Product Berhasil Dihapus');
    }
}
