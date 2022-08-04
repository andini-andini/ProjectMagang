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
                                <h4>New Category</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Name</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                id="name" name="name" value="{{ old('name') }}" placeholder="Enter name">

                                            @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                            {{-- <input type="email" class="form-control" id="inputEmail4" placeholder="Email"> --}}
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Color</label>
                                            <input type="color" class="form-control @error('color') is-invalid @enderror"
                                                id="color" name="color" value="{{ old('color') }}" placeholder="#00000">

                                            @error('color')
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
                </div>
            </div>
        </section>
    </div>
@endsection
