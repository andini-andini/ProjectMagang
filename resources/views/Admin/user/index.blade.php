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
                                <h4>User</h4>
                                <div class="row mb-4">
                                    <div class="col-12">
                                        {{-- <a href="{{ route('location.create') }}" class="btn btn-sm- btn-primary">New
                                            Location</a> --}}
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
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Role</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($user as $usr)
                                                <tr>
                                                    <td class="text-center">{{ $usr->id }}</td>
                                                    <td>{{ $usr->name }}</td>
                                                    <td>{{ $usr->email }}</td>
                                                    <td>{{ $usr->phone }}</td>
                                                    <td>{{ $usr->role }}</td>
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
