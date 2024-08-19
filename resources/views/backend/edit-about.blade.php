<!-- resources/views/backend/edit-about.blade.php -->
@extends('backend.layouts.main')
@section('main-container')
<div class="breadcome-area">
    <!-- Breadcome Area -->
</div>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="contact-top">
                    <h2>Edit About Page</h2>
                    <hr>
                    <form action="{{ route('admin.about.update', $about) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="from-control mg-b-20">
                            <img src="{{ asset('backend/img/' . $about->image) }}" width="100" alt="Image">
                        </div>
                        <div class="mb-3">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="from-control mg-b-20" value="{{ $about->title }}" placeholder="Enter Your Title">
                        </div>
                        <div class="mb-3">
                            <label for="description">Description</label>
                            <textarea name="description" placeholder="Description" class="msg-txt" cols="10" rows="5">{{ $about->description }}</textarea>
                        </div>
                        <div class="mb-3 contact-btom">
                            <button type="submit" class="btn contact-bt">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
