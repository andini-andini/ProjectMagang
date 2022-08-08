@extends('layouts.admin')

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>New Project</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Tag</label>
                                            <h6>P-</h6>
                                            <input type="text" class="form-control @error('tag') is-invalid @enderror"
                                                id="tag" name="tag" value="{{ old('tag') }}" placeholder="Enter Tag">

                                            @error('tag')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                            {{-- <input type="email" class="form-control" id="inputEmail4" placeholder="Email"> --}}
                                        </div>
                                        <div>
                                            <label for="inputEmail4">Name</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                id="name" name="name" value="{{ old('name') }}" placeholder="Enter name">

                                            @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                            {{-- <input type="email" class="form-control" id="inputEmail4" placeholder="Email"> --}}
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Department</label>
                                            <select name="departement" id="departement"
                                                class="form-control @error('departement') is-invalid @enderror"
                                                name="departement" value="" autocomplete="departement">
                                                <option value="" disabled selected>Select Department</option>
                                                @foreach ($departement as $dep)
                                                    <option value="{{ $dep->id }}">
                                                        {{ $dep->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div>
                                            <label for="inputEmail4">Total Assets</label>
                                            <input type="number"
                                                class="form-control @error('jumlahasset') is-invalid @enderror"
                                                id="jumlahasset" name="jumlahasset" value="{{ old('jumlahasset') }}"
                                                placeholder="Enter Total Assets">

                                            @error('jumlahasset')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                            {{-- <input type="email" class="form-control" id="inputEmail4" placeholder="Email"> --}}
                                        </div>
                                        <div>
                                            <label for="inputEmail4">Location</label>
                                            <input type="text" class="form-control @error('lokasi') is-invalid @enderror"
                                                id="lokasi" name="lokasi" value="{{ old('lokasi') }}"
                                                placeholder="Enter Location">

                                            @error('lokasi')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                            {{-- <input type="email" class="form-control" id="inputEmail4" placeholder="Email"> --}}
                                        </div>
                                        <div>
                                            <label>Start Date</label>
                                            <input type="date" name="startDate" id="startDate" value=""
                                                placeholder="dd-mm-yyyy"
                                                pattern="(?:30))|(?:(?:0[13578]|1[02])-31))/(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])/(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])"
                                                class="form-control">
                                        </div>
                                        <div>
                                            <label>Due Date</label>
                                            <input type="date" name="dueDate" id="dueDate" value="" placeholder="dd-mm-yyyy"
                                                pattern="(?:30))|(?:(?:0[13578]|1[02])-31))/(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])/(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])"
                                                class="form-control">
                                        </div>
                                    </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ route('project.index') }}" class="btn btn-danger">Cancel</a>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>
@endsection
