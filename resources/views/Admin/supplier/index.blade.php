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
                                <h4>Supplier</h4>
                                <div class="card-header-action">
                                    <a href="{{ route('supplier.create') }}" class="btn btn-sm- btn-primary">New
                                        Supplier</a>
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
                                                <th>Supplier Name</th>
                                                <th>Address</th>
                                                <th>Contact Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($supplier as $sup)
                                                <tr>
                                                    <td class="text-center">{{ $sup->id }}</td>
                                                    <td>{{ $sup->name }}</td>
                                                    <td>{{ $sup->address }}</td>
                                                    <td>{{ $sup->contactname }}</td>
                                                    <td>{{ $sup->phone }}</td>
                                                    <td>{{ $sup->email }}</td>
                                                    <td>
                                                        <form action="{{ route('supplier.destroy', $sup->id) }}"
                                                            method="POST">
                                                            <a class="btn btn-primary"
                                                                href="{{ route('supplier.edit', $sup->id) }}">Edit</a>
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
