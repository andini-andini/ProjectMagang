@extends('layouts.admin')

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Ticket</h4>
                                <div class="card-header-action">
                                    <a href="{{ route('ticket.create') }}" class="btn btn-sm- btn-primary">New
                                        TIcket</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="table-1">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    code
                                                </th>
                                                <th>Subject</th>
                                                <th>Requester</th>
                                                <th>Department</th>
                                                <th>Asset</th>
                                                <th>Project</th>
                                                <th>Recipients</th>
                                                <th>Priority</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($ticket as $tic)
                                                <tr>
                                                    <td class="text-center">{{ $tic->code }}</td>
                                                    <td>{{ $tic->subject }}</td>
                                                    <td>{{ $tic->user->name }}</td>
                                                    <td>{{ $tic->departement->name }}</td>
                                                    <td>{{ $tic->asset->name }}</td>
                                                    <td>{{ $tic->project->name }}</td>
                                                    <td>{{ $tic->recipients }}</td>
                                                    <td>
                                                        @if ($tic->priority == 'High')
                                                            <a style="color: red">High</a>
                                                        @elseif ($tic->priority == 'Medium')
                                                            <a style="color: rgb(220, 220, 0)">Medium</a>
                                                        @else
                                                            <a style="color: rgb(18, 213, 18)">Low</a>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($tic->status == 'Waiting')
                                                            <a style="color: red">Waiting</a>
                                                        @elseif ($tic->status == 'On Progress')
                                                            <a style="color: rgb(18, 213, 18)">On Progress</a>
                                                        @else
                                                            <a style="color: blue">Complete</a>
                                                        @endif
                                                    </td>
                                                    <td>

                                                        <form action="{{ route('ticket.destroy', $tic->id) }}"
                                                            method="POST">
                                                            <a class="btn btn-primary"
                                                                href="{{ route('ticket.edit', $tic->id) }}">Edit</a>
                                                            @csrf @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endsection
