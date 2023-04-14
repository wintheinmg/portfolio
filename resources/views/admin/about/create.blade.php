@extends('layouts.app')

@section('styles')
<!-- Styles -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
<!-- Or for RTL support -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" />
<style>
    .required:after {
        content:" *";
        color: red;
    }
</style>

@endsection

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>About</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('admin.about.index') }}">Abouts</a></li>
          <li class="breadcrumb-item active">About Create</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="role-table">
        <div class="card p-2">
            <div class="card-body p-2">
                <form action="{{ route('admin.about.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-sm-12 mb-2">
                            <div class="form-group">
                                <label class="required" for="name">Name</label>
                                <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}">
                                @if($errors->has('name'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('name') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-sm-12 mb-2">
                            <div class="form-group">
                                <label class="required" for="title">Title</label>
                                <input type="text" name="title" id="title" value="{{ old('title') }}" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}">
                                @if($errors->has('title'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('title') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-sm-12 mb-2">
                            <div class="form-group">
                                <label class="required" for="description">Description</label>
                                <textarea name="description" id="description" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}">{{ old('description') }}</textarea>
                                @if($errors->has('description'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('description') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-sm-12 mb-2">
                            <div class="form-group">
                                <label class="required" for="image">Image</label>
                                <input type="file" name="image" id="image" class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}">
                                @if($errors->has('image'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('image') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-sm-12 mb-2">
                            <div class="form-group">
                                <label class="required" for="resume">Resume</label>
                                <input type="file" name="resume" id="resume" class="form-control {{ $errors->has('resume') ? 'is-invalid' : '' }}">
                                @if($errors->has('resume'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('resume') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div style="float: right">
                                <a class="btn btn-secondary float-right" href="{{ route('admin.about.index') }}">Cancel</a>
                                <button type="submit" class="btn btn-success float-right">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

  </main><!-- End #main -->

@endsection

@section('scripts')
<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
$(document).ready(function() {
    $('#permission').select2({
        width: '100%'
    });
});
</script>
@endsection
