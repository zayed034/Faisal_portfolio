@extends('backend.layouts.main')
@section('main-container')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="contact-top">
                <h2>Edit Contact</h2>
                <hr>
                <form action="{{ route('admin.contact.update', $contact->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="text">Address</label>
                        <input type="text" name="address" class="from-control mg-b-20" value="{{ $contact->address }}">
                    </div>
                    <div class="mb-3">
                        <label for="text">Email</label>
                        <input type="text" name="email" class="from-control mg-b-20" value="{{ $contact->email }}">
                    </div>
                    <div class="mb-3">
                        <label for="text">Number</label>
                        <input type="text" name="number" class="from-control mg-b-20" value="{{ $contact->number }}">
                    </div>
                    <div class="mb-3 contact-btom">
                        <button class="btn contact-bt">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
