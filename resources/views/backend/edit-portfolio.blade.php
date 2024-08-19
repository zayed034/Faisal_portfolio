@extends('backend.layouts.main')
@section('main-container')
<div class="breadcome-area">
    <!-- Breadcome content here -->
</div>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="contact-top">
                    <h2>Edit Portfolio</h2>
                    <hr>
                    <form action="{{ route('admin.portfolio.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="text">Title</label>
                            <input type="text" name="title" class="from-control mg-b-20" value="{{ $portfolio->title }}">
                        </div>
                        <div class="mb-3">
                            <label for="text">Subject</label>
                            <input type="text" name="subject" class="from-control mg-b-20" value="{{ $portfolio->subject }}">
                        </div>
                        <div class="mb-3">
                            <label for="img">Image</label>
                            <input type="file" name="image" class="from-control mg-b-20">
                            @if($portfolio->image)
                            <img src="{{ asset('backend/img/' . $portfolio->image) }}" alt="{{ $portfolio->title }}" width="50">
                            @endif
                        </div>
                        <div class="mb-3 contact-btom">
                            <button class="btn contact-bt">Update</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-top">
                    <!-- Optional content here -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
