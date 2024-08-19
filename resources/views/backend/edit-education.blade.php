@extends('backend.layouts.main')

@section('main-container')
<div class="breadcome-area">
    <!-- Breadcome area content -->
</div>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="contact-top">
                    <h2>Edit Education</h2>
                    <hr>
                    <form action="{{ route('admin.education.update', $education->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="starting_date">Starting Date</label>
                            <input type="date" name="starting_date" class="from-control mg-b-20" value="{{ $education->starting_date }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="university_name">University/College Name</label>
                            <input type="text" name="university_name" class="from-control mg-b-20" value="{{ $education->university_name }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="subject">Subject</label>
                            <input type="text" name="subject" class="from-control mg-b-20" value="{{ $education->subject }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="description">Description</label>
                            <textarea name="description" placeholder="Description" class="msg-txt from-control mg-b-20" cols="10" rows="5" required>{{ $education->description }}</textarea>
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
