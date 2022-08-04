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
                                <h4>Manufacture</h4>
                                <div class="row mb-4">
                                    <div class="col-12">
                                        <a href="{{ route('manufacture.create') }}" class="btn btn-sm- btn-primary">New
                                            Manufacture</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="table-1">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    id
                                                </th>
                                                <th>Manufacture Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($manufacture as $manufact)
                                                <tr>
                                                    <td class="text-center">{{ $manufact->id }}</td>
                                                    <td>{{ $manufact->name }}</td>
                                                    <td>
                                                        <form action="{{ route('manufacture.destroy', $manufact->id) }}"
                                                            method="POST">
                                                            <a class="btn btn-primary"
                                                                href="{{ route('manufacture.edit', $manufact->id) }}">Edit</a>
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
