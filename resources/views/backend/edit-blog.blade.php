@extends('backend.layouts.main')
@section('main-container')
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-icon">
                                    <i class="icon nalika-home"></i>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>Edit Blog</h2>
                                    <p>Welcome to Zayed <span class="bread-ntd">Admin Panel</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="breadcomb-report">
                                <button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="icon nalika-download"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="contact-top">
                    <h2>Edit Blog</h2>
                    <hr>
                    <form action="{{ route('admin.blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="subject">Subject</label>
                            <input type="text" name="subject" class="from-control mg-b-20" value="{{ $blog->subject }}">
                        </div>
                        <div class="mb-3">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="from-control mg-b-20">
                            <img src="{{ Storage::url($blog->image) }}" alt="Image" width="100">
                        </div>
                        <div class="mb-3">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="from-control mg-b-20" value="{{ $blog->title }}">
                        </div>
                        <div class="mb-3">
                            <label for="description">Description</label>
                            <textarea name="description" class="from-control mg-b-20" cols="10" rows="5">{{ $blog->description }}</textarea>
                        </div>
                        <div class="mb-3 contact-bottom">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-top">
                    <!-- Additional Content -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
