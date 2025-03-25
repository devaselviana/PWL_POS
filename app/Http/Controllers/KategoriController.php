<?php

namespace App\Http\Controllers;
use App\Models\KategoriModel;
use Illuminate\Http\Request;
use App\DataTables\KategoriDataTable;

class KategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable)
    {
        return $dataTable->render('kategori.index');
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'kodeKategori' => 'bail|required|string|max:5',
            'namaKategori' => 'required|string|max:5',
        ]);
        
        KategoriModel::create([
            'kategori_kode' => $request->kodeKategori,
            'kategori_nama' => $request->namaKategori,
        ]);
        
        $validatedData = $request->validateWithBag('post',[
            'kategori_kode' => $request->kodeKategori,
            'kategori_nama' => $request->namaKategori,
        ]);

        $request->validate([
            'kategori_kode' => $request->kodeKategori,
            'kategori_nama' => $request->namaKategori,
        ]);

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil ditambahkan');
    }

    

    // public function edit($id)
    // {
    //     $data = KategoriModel::findOrFail($id); 
    //     return view('kategori.edit', ['kategori' => $data]); 
    // }

    // public function update(Request $request, $id)
    // {
    //     // Update data
    //     KategoriModel::where('kategori_id', $id)->update([
    //         'kategori_kode' => $request['kodeKategori'],
    //         'kategori_nama' => $request['namaKategori']
    //     ]);

    // }

    // public function delete($id){
    //     KategoriModel::where('kategori_id',$id)->delete();
    //     return redirect('/kategori');
    // }

}