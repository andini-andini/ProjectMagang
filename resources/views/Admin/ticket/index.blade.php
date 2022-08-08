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
                                                    <td>{{ $tic->recipiects }}</td>
                                                    <td>{{ $tic->priority }}</td>
                                                    <td>{{ $tic->status }}</td>
                                                    <td>
                                                        {{-- <form action="{{ route('location.destroy', $loc->id) }}"
                                                            method="POST">
                                                            <a class="btn btn-primary"
                                                                href="{{ route('location.edit', $loc->id) }}">Edit</a>
                                                            @csrf @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form> --}}
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
