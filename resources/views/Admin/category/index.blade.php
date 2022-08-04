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
                                <h4>Asset Categories</h4>
                                <div class="row mb-4">
                                    <div class="col-12">
                                        <a href="{{ route('category.create') }}" class="btn btn-sm- btn-primary">New
                                            Category</a>
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
                                                <th>Category Name</th>
                                                <th>Color</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($category as $cat)
                                                <tr>
                                                    <td class="text-center">{{ $cat->id }}</td>
                                                    <td>{{ $cat->name }}</td>
                                                    <td>{{ $cat->color }}</td>
                                                    <td>
                                                        <form action="{{ route('category.destroy', $cat->id) }}"
                                                            method="POST">
                                                            <a class="btn btn-primary"
                                                                href="{{ route('category.edit', $cat->id) }}">Edit</a>
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
