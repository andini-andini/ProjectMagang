<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Departement;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all()->sortBy("asc");
        $departement = Departement::all()->sortBy("asc");
        return view('Admin.user.profile',  ['departement' => $departement], compact('user', 'departement'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::all()->where('id', $id);
        return view('Admin.user.profile', compact('user'));
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
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'birthday' => 'required',
            'address' => 'required',
        ]);
        $user = User::find($id);
        if ($request->file('image') != null && $user->image && file_exists(storage_path('app/public/' . $user->image))) {
            Storage::delete(['public/' . $user->image]);
            $image_name = $request->file('image')->store('images', 'public');
        } elseif ($request->file('image') != null) {
            $image_name = $request->file('image')->store('images', 'public');
        } else {
            $image_name = $user->image;
        }
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->phone = $request->get('phone');
        $user->gender = $request->get('gender');
        $user->birthday = $request->get('birthday');
        $user->address = $request->get('address');
        $user->image = $image_name;
        $user->save();
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('user.index')->with('success', 'Data Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
