@extends('layouts.admin')

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row mt-sm-4">
                    @foreach ($user as $usr)
                        <div class="col-12 col-md-12 col-lg-4">
                            <div class="card author-box">
                                <div class="card-body">
                                    <div class="author-box-center">
                                        {{-- <img alt="image" src="{{ asset('storage/' . Auth::user()->image) }}"
                                            class="rounded-circle author-box-picture"> --}}
                                        <img alt="image" src={{ Auth::user()->image }}
                                            class="rounded-circle author-box-picture">
                                        <div class="clearfix"></div>
                                        <div class="author-box-name">
                                            <a>{{ Auth::user()->name }}</a>
                                        </div>
                                        <div class="author-box-job">{{ Auth::user()->departement->name }}</div>
                                    </div>
                                    {{-- <div class="text-center">
                                        <div class="author-box-description">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur
                                                voluptatum
                                                alias molestias
                                                minus quod dignissimos.
                                            </p>
                                        </div>
                                        <div class="mb-2 mt-3">
                                            <div class="text-small font-weight-bold">Follow Hasan On</div>
                                        </div>
                                        <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="#" class="btn btn-social-icon mr-1 btn-twitter">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="#" class="btn btn-social-icon mr-1 btn-github">
                                            <i class="fab fa-github"></i>
                                        </a>
                                        <a href="#" class="btn btn-social-icon mr-1 btn-instagram">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                        <div class="w-100 d-sm-none"></div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4>Personal Details</h4>
                                </div>
                                <div class="card-body">
                                    <div class="py-4">
                                        <p class="clearfix">
                                            <span class="float-left">
                                                Birthday
                                            </span>
                                            <span class="float-right text-muted">
                                                {{ Auth::user()->birthday }}
                                            </span>
                                        </p>
                                        <p class="clearfix">
                                            <span class="float-left">
                                                Phone
                                            </span>
                                            <span class="float-right text-muted">
                                                {{ Auth::user()->phone }}
                                            </span>
                                        </p>
                                        <p class="clearfix">
                                            <span class="float-left">
                                                Mail
                                            </span>
                                            <span class="float-right text-muted">
                                                {{ Auth::user()->email }}
                                            </span>
                                        </p>
                                        <p class="clearfix">
                                            <span class="float-left">
                                                Address
                                            </span>
                                            <span class="float-right text-muted">
                                                {{ Auth::user()->address }}
                                            </span>
                                        </p>
                                        <p class="clearfix">
                                            <span class="float-left">
                                                Gender
                                            </span>
                                            <span class="float-right text-muted">
                                                {{ Auth::user()->gender }}
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-12 col-md-12 col-lg-8">
                        <div class="card">
                            <div class="padding-20">
                                <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#settings"
                                            role="tab" aria-selected="true">Settings</a>
                                    </li>
                                </ul>
                                <div class="tab-content tab-bordered" id="myTab3Content">
                                    <div class="tab-pane fade show active" id="about" role="tabpanel"
                                        aria-labelledby="home-tab2">
                                        <form action="{{ route('user.update', Auth::user()->id) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @method('PUT')
                                            @csrf
                                            <div class="card-header">
                                                <h4>Edit Profile</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="form-group col-md-6 col-12">
                                                        <label>Full Name</label>
                                                        <input type="text"
                                                            class="form-control @error('name') is-invalid @enderror"
                                                            id="name" name="name" value="{{ Auth::user()->name }}"
                                                            placeholder="Enter name">

                                                        @error('name')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-md-6 col-12">
                                                        <label>Department</label>
                                                        <select name="departement" id="departement"
                                                            class="form-control @error('departement') is-invalid @enderror"
                                                            name="departement" value="{{ Auth::user()->departement }}"
                                                            autocomplete="departement">
                                                            <option value="" disabled selected>Department</option>
                                                            @foreach ($departement as $departement)
                                                                <option value="{{ $departement->id }}">
                                                                    {{ $departement->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-6 col-12">
                                                        <label>Email</label>
                                                        <input type="email"
                                                            class="form-control @error('email') is-invalid @enderror"
                                                            id="email" name="email" value="{{ Auth::user()->email }}"
                                                            placeholder="Enter email">

                                                        @error('email')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-md-6 col-12">
                                                        <label>Phone</label>
                                                        <input type="number"
                                                            class="form-control @error('phone') is-invalid @enderror"
                                                            id="phone" name="phone" value="{{ Auth::user()->phone }}"
                                                            placeholder="Enter Phone">

                                                        @error('phone')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-7 col-12">
                                                        <label>Gender</label>
                                                        <select name="gender" id="gender"
                                                            class="form-control @error('gender') is-invalid @enderror"
                                                            name="gender" autocomplete="gender">
                                                            <option value="{{ Auth::user()->gender }}" disabled selected>
                                                                {{ Auth::user()->gender }}</option>
                                                            <option value="male">Male</option>
                                                            <option value="female">Female</option>
                                                            <option value="other">Other</option>
                                                        </select>
                                                        @error('gender')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-md-5 col-12">
                                                        <label>Birthday</label>
                                                        <input type="date" name="birthday" id="birthday"
                                                            value="{{ Auth::user()->birthday }}" placeholder="dd-mm-yyyy"
                                                            pattern="(?:30))|(?:(?:0[13578]|1[02])-31))/(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])/(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-7 col-12">
                                                        <label>Address</label>
                                                        <input type="text"
                                                            class="form-control @error('address') is-invalid @enderror"
                                                            id="address" name="address"
                                                            value="{{ Auth::user()->address }}"
                                                            placeholder="Enter Address">

                                                        @error('address')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-md-5 col-12">
                                                        <label for="image"><strong>Image</strong></label>
                                                        <input type="file" class="form-control" required="required"
                                                            id="image" name="image" value="{{ Auth::user()->image }}">
                                                        {{-- <img width="150px" src={{ Auth::user()->image }}> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer text-right">
                                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
