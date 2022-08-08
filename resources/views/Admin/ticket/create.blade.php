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
                                <h4>New Ticket</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('ticket.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div>
                                            <label for="inputEmail4">Subject</label>
                                            <input type="text" class="form-control @error('subject') is-invalid @enderror"
                                                id="subject" name="subject" value="{{ old('subject') }}"
                                                placeholder="Enter Subject">

                                            @error('subject')
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
                                        <div class="form-group col-md-6">
                                            <label>Asset</label>
                                            <select name="asset" id="asset"
                                                class="form-control @error('asset') is-invalid @enderror" name="asset"
                                                value="" autocomplete="asset">
                                                <option value="" disabled selected>Select Asset</option>
                                                @foreach ($asset as $ass)
                                                    <option value="{{ $ass->id }}">
                                                        {{ $ass->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Project</label>
                                            <select name="project" id="project"
                                                class="form-control @error('project') is-invalid @enderror" name="project"
                                                value="" autocomplete="project">
                                                <option value="" disabled selected>Select Project</option>
                                                @foreach ($project as $prj)
                                                    <option value="{{ $prj->id }}">
                                                        {{ $prj->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Recipients</label>
                                            <select name="recipients" id="recipients"
                                                class="form-control @error('recipients') is-invalid @enderror"
                                                name="recipients" value="" autocomplete="recipients">
                                                <option value="" disabled selected>Select Recipients</option>
                                                @foreach ($recipients as $rep)
                                                    <option value="{{ $rep->id }}">
                                                        {{ $rep->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div>
                                            <label>Priority</label>
                                            <select name="priority" id="priority"
                                                class="form-control @error('priority') is-invalid @enderror" name="priority"
                                                value="{{ old('priority') }}" autocomplete="priority">
                                                <option value="" disabled selected>Select Priority
                                                </option>
                                                <option style="color: red; " value="High">High</option>
                                                <option style="color: yellow; " value="Medium">Medium</option>
                                                <option style="color: green; " value="Low">Low</option>
                                            </select>
                                        </div>
                                        @error('priority')
                                            <small style="color: red; ">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div>
                                        <label>Status</label>
                                        <select name="status" id="status"
                                            class="form-control @error('status') is-invalid @enderror" name="status"
                                            value="{{ old('status') }}" autocomplete="status">
                                            <option value="" disabled selected>Select Status
                                            </option>
                                            <option style="color: red; " value="Broken">Broken</option>
                                            <option style="color: yellow; " value="Use">Use</option>
                                            <option style="color: green; " value="New">New</option>
                                        </select>
                                    </div>
                                    @error('status')
                                        <small style="color: red; ">{{ $message }}</small>
                                    @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('ticket.index') }}" class="btn btn-danger">Cancel</a>
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
