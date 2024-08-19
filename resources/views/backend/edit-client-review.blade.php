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
                        <h2>Edit Client Review</h2>
                        <hr>
                        <form action="{{ route('admin.port-client-re.update', $clientReview) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="image">Image</label>
                                <input type="file" name="image" class="from-control mg-b-20">
                                @if ($clientReview->image)
                                    <img src="{{ $clientReview->image ? Storage::url($clientReview->image) : '' }}" alt="" width="100">
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="from-control mg-b-20" value="{{ $clientReview->name }}">
                            </div>
                            <div class="mb-3">
                                <label for="designation">Designation</label>
                                <input type="text" name="designation" class="from-control mg-b-20" value="{{ $clientReview->designation }}">
                            </div>
                            <div class="mb-3">
                                <label for="description">Description</label>
                                <textarea name="description" class="msg-txt from-control mg-b-20" cols="10" rows="5">{{ $clientReview->description }}</textarea>
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
