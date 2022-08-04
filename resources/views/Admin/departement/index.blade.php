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
                                {{-- <a href="{{ route('departement.create') }}" class="btn btn-sm- btn-primary ">New
                                            Department</a> --}}
                                <button onclick="document.getElementById('id01').style.display='block'"
                                    class="btn btn-sm- btn-primary">New Department</button>
                            </div>
                            <div id="id01" class="w3-modal" style="text-align: center">
                                <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
                                    <span onclick="document.getElementById('id01').style.display='none'"
                                        class="w3-button w3-xlarge w3-hover-red w3-display-topright"
                                        title="Close Modal">&times;</span>
                                    <div class="card-header">
                                        <h2>New Department</h2>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('departement.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-row">
                                                <div class="form-group col-md-12" style="text-align: left">
                                                    <label for="inputEmail4">Name</label>
                                                    <input type="text"
                                                        class="form-control @error('name') is-invalid @enderror" id="name"
                                                        name="name" value="{{ old('name') }}" placeholder="Enter name">

                                                    @error('name')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                    {{-- <input type="email" class="form-control" id="inputEmail4" placeholder="Email"> --}}
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
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
            </div>
        </section>
    </div>
@endsection
