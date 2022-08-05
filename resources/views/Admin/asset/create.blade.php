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
                                <h4>New Asset</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('asset.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Asset Name</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                id="name" name="name" value="{{ old('name') }}" placeholder="Enter name">

                                            @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                            {{-- <input type="email" class="form-control" id="inputEmail4" placeholder="Email"> --}}
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Category</label>
                                            <select name="category" id="category"
                                                class="form-control @error('category') is-invalid @enderror" name="category"
                                                value="" autocomplete="category">
                                                <option value="" disabled selected>Select Category</option>
                                                @foreach ($category as $cat)
                                                    <option value="{{ $cat->id }}">
                                                        {{ $cat->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Location</label>
                                            <select name="location" id="location"
                                                class="form-control @error('location') is-invalid @enderror" name="location"
                                                value="" autocomplete="location">
                                                <option value="" disabled selected>Select Location</option>
                                                @foreach ($location as $loc)
                                                    <option value="{{ $loc->id }}">
                                                        {{ $loc->name }}</option>
                                                @endforeach
                                            </select>
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
                                        <div class="form-group col-md-6">
                                            <label>Manufacture</label>
                                            <select name="manufacture" id="manufacture"
                                                class="form-control @error('manufacture') is-invalid @enderror"
                                                name="manufacture" value="" autocomplete="manufacture">
                                                <option value="" disabled selected>Select Manufacture</option>
                                                @foreach ($manufacture as $man)
                                                    <option value="{{ $man->id }}">
                                                        {{ $man->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Supplier</label>
                                            <select name="supplier" id="supplier"
                                                class="form-control @error('supplier') is-invalid @enderror" name="supplier"
                                                value="" autocomplete="supplier">
                                                <option value="" disabled selected>Select Supplier</option>
                                                @foreach ($supplier as $sup)
                                                    <option value="{{ $sup->id }}">
                                                        {{ $sup->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <a href="{{ route('asset.index') }}" class="btn btn-danger">Cancel</a>
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
