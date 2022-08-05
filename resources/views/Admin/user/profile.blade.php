@extends('layouts.admin')

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row mt-sm-4">
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="card author-box">
                            <div class="card-body">
                                <div class="author-box-center">
                                    <img alt="image" src="assets/img/users/user-1.png"
                                        class="rounded-circle author-box-picture">
                                    <div class="clearfix"></div>
                                    <div class="author-box-name">
                                        <a href="#">Sarah Smith</a>
                                    </div>
                                    <div class="author-box-job">Web Developer</div>
                                </div>
                                <div class="text-center">
                                    <div class="author-box-description">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur voluptatum
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
                                </div>
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
                                            30-05-1998
                                        </span>
                                    </p>
                                    <p class="clearfix">
                                        <span class="float-left">
                                            Phone
                                        </span>
                                        <span class="float-right text-muted">
                                            (0123)123456789
                                        </span>
                                    </p>
                                    <p class="clearfix">
                                        <span class="float-left">
                                            Mail
                                        </span>
                                        <span class="float-right text-muted">
                                            test@example.com
                                        </span>
                                    </p>
                                    <p class="clearfix">
                                        <span class="float-left">
                                            Facebook
                                        </span>
                                        <span class="float-right text-muted">
                                            <a href="#">John Deo</a>
                                        </span>
                                    </p>
                                    <p class="clearfix">
                                        <span class="float-left">
                                            Twitter
                                        </span>
                                        <span class="float-right text-muted">
                                            <a href="#">@johndeo</a>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                        <form method="post" class="needs-validation">
                                            <div class="card-header">
                                                <h4>Edit Profile</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="form-group col-md-6 col-12">
                                                        <label>First Name</label>
                                                        <input type="text" class="form-control" value="John">
                                                        <div class="invalid-feedback">
                                                            Please fill in the first name
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6 col-12">
                                                        <label>Last Name</label>
                                                        <input type="text" class="form-control" value="Deo">
                                                        <div class="invalid-feedback">
                                                            Please fill in the last name
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-7 col-12">
                                                        <label>Email</label>
                                                        <input type="email" class="form-control" value="test@example.com">
                                                        <div class="invalid-feedback">
                                                            Please fill in the email
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-5 col-12">
                                                        <label>Phone</label>
                                                        <input type="tel" class="form-control" value="">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-12">
                                                        <label>Bio</label>
                                                        <textarea
                                                            class="form-control summernote-simple">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur voluptatum alias molestias minus quod dignissimos.</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer text-right">
                                                <button class="btn btn-primary">Save Changes</button>
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
