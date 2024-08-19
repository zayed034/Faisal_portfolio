@extends('backend.layouts.main')

@section('main-container')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="contact-top">
                    <h2>Edit Experience</h2>
                    <hr>
                    <form action="{{ route('admin.experience.update', $experience->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="text">Joining Date</label>
                            <input type="text" name="date" class="from-control mg-b-20" value="{{ $experience->joining_date }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="text">Designation</label>
                            <input type="text" name="designation" class="from-control mg-b-20" value="{{ $experience->designation }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="text">Company Name</label>
                            <input type="text" name="companyname" class="from-control mg-b-20" value="{{ $experience->company_name }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="text">Description</label>
                            <textarea name="description" class="from-control" cols="10" rows="5" required>{{ $experience->description }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="img">Image</label>
                            <input type="file" name="file" class="from-control mg-b-20">
                            @if($experience->image)
                                <img src="{{ Storage::url('public/experiences/' . $experience->image) }}" alt="Image" style="width: 100px;">
                            @endif
                        </div>
                        <div class="mb-3 contact-btom">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
