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
                                <h4>Project</h4>
                                <div class="card-header-action">
                                    <a href="{{ route('project.create') }}" class="btn btn-sm- btn-primary">New
                                        Project</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="table-1">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    tag
                                                </th>
                                                <th>Project Name</th>
                                                <th>Department</th>
                                                <th>Total Assets</th>
                                                <th>Location</th>
                                                <th>Start Date</th>
                                                <th>Due Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($project as $prj)
                                                <tr>
                                                    <td class="text-center">{{ $prj->tag }}</td>
                                                    <td>{{ $prj->name }}</td>
                                                    <td>{{ $prj->departement->name }}</td>
                                                    <td>{{ $prj->jumlahAsset }}</td>
                                                    <td>{{ $prj->lokasi }}</td>
                                                    <td>{{ $prj->startDate }}</td>
                                                    <td>{{ $prj->dueDate }}</td>
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
