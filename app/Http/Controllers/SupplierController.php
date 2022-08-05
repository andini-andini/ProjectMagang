<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supplier = Supplier::all(); // Mengambil semua isi tabel
        return view('Admin.supplier.index', compact('supplier'), ['data' => $supplier]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.supplier.create');
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
            'name' => 'required',
            'address' => 'required',
            'contactname' => 'required',
            'phone' => 'required',
            'email' => 'required',

        ]);
        $supplier = new Supplier();
        $supplier->name = $request->get('name');
        $supplier->address = $request->get('address');
        $supplier->contactname = $request->get('contactname');
        $supplier->phone = $request->get('phone');
        $supplier->email = $request->get('email');
        $supplier->save();
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('supplier.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supplier = Supplier::find($id);
        return view('Admin.supplier.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'contactname' => 'required',
            'phone' => 'required',
            'email' => 'required',

        ]);
        $supplier = Supplier::find($id);
        $supplier->name = $request->get('name');
        $supplier->address = $request->get('address');
        $supplier->contactname = $request->get('contactname');
        $supplier->phone = $request->get('phone');
        $supplier->email = $request->get('email');
        $supplier->save();
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('supplier.index')->with('success', 'Data Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Supplier::find($id)->delete();
        return redirect()->route('supplier.index')->with('success', 'Data Berhasil Dihapus');
    }
}
