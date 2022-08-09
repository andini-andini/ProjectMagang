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
                                <h4>Edit Supplier</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('supplier.update', $supplier->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Name</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                id="name" name="name" value="{{ $supplier->name }}"
                                                placeholder="Enter name">

                                            @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                            {{-- <input type="email" class="form-control" id="inputEmail4" placeholder="Email"> --}}
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Address</label>
                                            <input type="text" class="form-control @error('address') is-invalid @enderror"
                                                id="address" name="address" value="{{ $supplier->address }}"
                                                placeholder="Enter Address">

                                            @error('address')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                            {{-- <input type="email" class="form-control" id="inputEmail4" placeholder="Email"> --}}
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Contact Name</label>
                                            <input type="text"
                                                class="form-control @error('contactname') is-invalid @enderror"
                                                id="contactname" name="contactname" value="{{ $supplier->contactname }}"
                                                placeholder="Enter Contact Name">

                                            @error('contactname')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                            {{-- <input type="email" class="form-control" id="inputEmail4" placeholder="Email"> --}}
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Phone</label>
                                            <input type="number" class="form-control @error('phone') is-invalid @enderror"
                                                id="phone" name="phone" value="{{ $supplier->phone }}"
                                                placeholder="Enter Phone">

                                            @error('phone')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                            {{-- <input type="email" class="form-control" id="inputEmail4" placeholder="Email"> --}}
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Email</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                id="email" name="email" value="{{ $supplier->email }}"
                                                placeholder="Enter Email">

                                            @error('email')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                            {{-- <input type="email" class="form-control" id="inputEmail4" placeholder="Email"> --}}
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <a href="{{ route('supplier.index') }}" class="btn btn-danger">Cancel</a>
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
