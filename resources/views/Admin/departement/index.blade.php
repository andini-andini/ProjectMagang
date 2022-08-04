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
                                <h4>Department</h4>
                                <div class="row mb-4">
                                    <div class="col-12">
                                        <a href="{{ route('departement.create') }}" class="btn btn-sm- btn-primary">New
                                            Department</a>
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
                                                <th>Department Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($departement as $depart)
                                                <tr>
                                                    <td class="text-center">{{ $depart->id }}</td>
                                                    <td>{{ $depart->name }}</td>
                                                    <td>
                                                        <form action="{{ route('departement.destroy', $depart->id) }}"
                                                            method="POST">
                                                            <a class="btn btn-primary"
                                                                href="{{ route('departement.edit', $depart->id) }}">Edit</a>
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
