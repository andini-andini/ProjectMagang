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
                                <h4>Asset</h4>
                                <div class="card-header-action">
                                    <a href="{{ route('asset.create') }}" class="btn btn-sm- btn-primary">New
                                        Asset</a>
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
                                                <th>Asset Name</th>
                                                <th>Category</th>
                                                <th>Location</th>
                                                <th>Department</th>
                                                <th>Manufacture</th>
                                                <th>Supplier</th>
                                                <th>User</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($asset as $asset)
                                                <tr>
                                                    <td class="text-center">{{ $asset->id }}</td>
                                                    <td>{{ $asset->name }}</td>
                                                    <td>{{ $asset->category->name }}</td>
                                                    <td>{{ $asset->location->name }}</td>
                                                    <td>{{ $asset->departement->name }}</td>
                                                    <td>{{ $asset->manufacture->name }}</td>
                                                    <td>{{ $asset->supplier->name }}</td>
                                                    <td>{{ $asset->user->name }}</td>
                                                    <td>
                                                        <form action="{{ route('asset.destroy', $asset->id) }}"
                                                            method="POST">
                                                            {{-- <a class="btn btn-primary"
                                                                href="{{ route('location.edit', $loc->id) }}">Edit</a> --}}
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
