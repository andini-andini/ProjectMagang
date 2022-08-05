<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asset;
use App\Models\User;
use App\Models\Category;
use App\Models\Location;
use App\Models\Departement;
use App\Models\Manufacture;
use App\Models\Supplier;
use Illuminate\Support\Facades\Auth;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asset = Asset::all();
        $user = User::all();
        $category = Category::all();
        $location = Location::all();
        $departement = Departement::all();
        $manufacture = Manufacture::all();
        $supplier = Supplier::all();

        return view(
            'Admin.asset.index',
            [
                'user' => $user,
                'category' => $category,
                'location' => $location,
                'departement' => $departement,
                'manufacture' => $manufacture,
                'supplier' => $supplier
            ],
            compact('asset', 'user', 'category', 'location', 'departement', 'manufacture', 'supplier')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all()->sortBy("asc");
        $location = Location::all();
        $departement = Departement::all();
        $manufacture = Manufacture::all();
        $supplier = Supplier::all();
        $asset = Asset::with('categori', 'location', 'departement', 'manufacture', 'supplier');
        return view('Admin.asset.create', ['asset' => $asset, 'category' => $category, 'location' => $location, 'departement' => $departement, 'manufacture' => $manufacture, 'supplier' => $supplier]);

        // $category = Category::all();
        // $location = Location::all();
        // $departement = Departement::all();
        // $manufacture = Manufacture::all();
        // $supplier = Supplier::all();
        // $asset = Asset::with('categori', 'location', 'departement', 'manufacture', 'supplier');
        // return view(
        //     'Admin.asset.create',
        //     [
        //         'asset' => $asset, 'categori' => $category, 'location' => $location, 'departement' => $departement, 'manufacture' => $manufacture, 'supplier' => $supplier,
        //     ]
        // );
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
        $asset = new Asset();
        $asset->name = $request->get('name');

        $category = Category::all()->where('id', Request('category'))->first();
        $location = Location::all()->where('id', Request('location'))->first();
        $departement = Departement::all()->where('id', Request('departement'))->first();
        $manufacture = Manufacture::all()->where('id', Request('manufacture'))->first();
        $supplier = Supplier::all()->where('id', Request('supplier'))->first();

        $asset->user_id = Auth::user()->id;
        $asset->category_id = $category->id;
        $asset->location_id = $location->id;
        $asset->departement_id = $departement->id;
        $asset->manufacturs_id = $manufacture->id;
        $asset->supplier_id = $supplier->id;
        $asset->save();
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('asset.index')->with('success', 'Data Berhasil Ditambahkan');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Asset::find($id)->delete();
        return redirect()->route('asset.index')->with('success', 'Data Berhasil Dihapus');
    }
}
