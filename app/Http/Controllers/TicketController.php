<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\User;
use App\Models\Departement;
use App\Models\Asset;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ticket = Ticket::all();
        $asset = Asset::all();
        $user = User::all();
        $recipients = User::all();
        $departement = Departement::all();
        $project = Project::all();

        return view(
            'Admin.ticket.index',
            [
                'asset' => $asset,
                'user' => $user,
                'recipients' => $recipients,
                'departement' => $departement,
                'project' => $project
            ],
            compact('ticket', 'asset', 'user', 'recipients', 'departement', 'project')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $asset = Asset::all();
        $user = User::all();
        $recipients = User::all()->where('role', 'usr',);
        $departement = Departement::all();
        $project = Project::all();
        $ticket = Ticket::with('asset', 'user', 'recipients', 'departement', 'project');
        return view('Admin.ticket.create', ['ticket' => $ticket, 'asset' => $asset, 'user' => $user, 'recipients' => $recipients, 'departement' => $departement, 'project' => $project]);
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
            'subject' => 'required',
            'priority' => 'required',
            'status' => 'required',

        ]);
        $ticket = new Ticket();
        $ticket->code = 'TIC-' . random_int(0, 10000);
        $ticket->subject = $request->get('subject');
        $ticket->priority = $request->get('priority');
        $ticket->status = 'Waiting';

        $recipients = User::all()->where('id', Request('recipients'))->first();
        $departement = Departement::all()->where('id', Request('departement'))->first();
        $asset = Asset::all()->where('id', Request('asset'))->first();
        $project = Project::all()->where('id', Request('project'))->first();

        $ticket->departement_id = $departement->id;
        $ticket->user_id = Auth::user()->id;
        $ticket->asset_id = $asset->id;
        $ticket->project_id = $project->id;
        $ticket->recipients = $recipients->id;
        $ticket->save();
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('ticket.index')->with('success', 'Data Berhasil Ditambahkan');
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
        $ticket = Ticket::find($id);
        return view('Admin.ticket.edit', compact('ticket'));
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
            'status' => 'required',

        ]);
        $ticket = Ticket::find($id);
        $ticket->status = $request->get('status');
        $ticket->save();
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('ticket.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ticket::find($id)->delete();
        return redirect()->route('ticket.index')->with('success', 'Data Berhasil Dihapus');
    }
}
