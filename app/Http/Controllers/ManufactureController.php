<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manufacture;

class ManufactureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manufacture = Manufacture::all(); // Mengambil semua isi tabel
        return view('Admin.manufacture.index', compact('manufacture'), ['data' => $manufacture]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.manufacture.create');
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

        ]);
        $manufacrure = new Manufacture();
        $manufacrure->name = $request->get('name');
        $manufacrure->save();
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('manufacture.index')->with('success', 'Data Berhasil Ditambahkan');
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
        $manufacture = Manufacture::find($id);
        return view('Admin.manufacture.edit', compact('manufacture'));
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
        ]);
        $manufacture = Manufacture::find($id);

        $manufacture->name = $request->get('name');
        $manufacture->save();
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('manufacture.index')->with('success', 'Data Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Manufacture::find($id)->delete();
        return redirect()->route('manufacture.index')->with('success', 'Data Berhasil Dihapus');
    }
}
