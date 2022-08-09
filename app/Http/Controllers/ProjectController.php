<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Departement;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project = Project::all()->sortBy("asc");
        $departement = Departement::all()->sortBy("asc");
        return view('Admin.project.index',  ['departement' => $departement], compact('project', 'departement'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departement = Departement::all();
        $project = Project::with('departement');
        return view('Admin.project.create', ['project' => $project, 'departement' => $departement]);
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
            'tag' => 'required',
            'name' => 'required',
            'jumlahAsset' => 'required',
            'lokasi' => 'required',
            'startDate' => 'required',
            'dueDate' => 'required',

        ]);
        $project = new Project();
        $project->tag = 'P-' . $request->get('tag');
        $project->name = $request->get('name');
        $project->jumlahAsset = $request->get('jumlahAsset');
        $project->lokasi = $request->get('lokasi');
        $project->startDate = $request->get('startDate');
        $project->dueDate = $request->get('dueDate');

        $departement = Departement::all()->where('id', Request('departement'))->first();
        $project->departement_id = $departement->id;

        $project->save();
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('project.index')->with('success', 'Data Berhasil Ditambahkan');
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
        $departement = Departement::all();
        $project = Project::find($id);
        return view('Admin.project.edit', ['project' => $project, 'departement' => $departement]);
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
            'tag' => 'required',
            'name' => 'required',
            'jumlahAsset' => 'required',
            'lokasi' => 'required',
            'startDate' => 'required',
            'dueDate' => 'required',

        ]);
        $project = Project::find($id);
        $project->tag = $request->get('tag');
        $project->name = $request->get('name');
        $project->jumlahAsset = $request->get('jumlahAsset');
        $project->lokasi = $request->get('lokasi');
        $project->startDate = $request->get('startDate');
        $project->dueDate = $request->get('dueDate');

        $departement = Departement::all()->where('id', Request('departement'))->first();
        $project->departement_id = $departement->id;

        $project->save();
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('project.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Project::find($id)->delete();
        return redirect()->route('project.index')->with('success', 'Data Berhasil Dihapus');
    }
}
