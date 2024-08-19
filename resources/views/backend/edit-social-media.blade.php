@extends('backend.layouts.main')
@section('main-container')
<div class="container">
    <div class="row">
        <div class="col-md-8">
           <div class="contact-top">
             <h2>Edit Social Media</h2>
            <form action="{{ route('admin.social-media.update', $socialMedia->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="facebook">Facebook</label>
                    <input type="text" name="facebook" class="from-control mg-b-20" value="{{ $socialMedia->facebook }}">
                </div>
                <div class="mb-3">
                    <label for="twitter">Twitter</label>
                    <input type="text" name="twitter" class="from-control mg-b-20" value="{{ $socialMedia->twitter }}">
                </div>
                <div class="mb-3">
                    <label for="youtube">Youtube</label>
                    <input type="text" name="youtube" class="from-control mg-b-20" value="{{ $socialMedia->youtube }}">
                </div>
                <div class="mb-3">
                    <label for="linkedin">Linkedin</label>
                    <input type="text" name="linkedin" class="from-control mg-b-20" value="{{ $socialMedia->linkedin }}">
                </div>
                <button type="submit" class="btn contact-bt">Update</button>
            </form>
           </div>
        </div>
    </div>
</div>
@endsection
