@extends('backend.layouts.main')
@section('main-container')
    <div class="breadcome-area">
        <!-- Existing content -->
    </div>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="contact-top">
                        <h2>Edit Service</h2>
                        <hr>
                        <form action="{{ route('admin.service.update', $service->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="text">Service Name</label>
                                <input type="text" name="servicename" class="from-control mg-b-20" value="{{ $service->service_name }}" placeholder="Enter Your Service Name">
                            </div>
                            <div class="mb-3">
                                <label for="text">Description</label>
                                <textarea name="description" placeholder="Description" class="msg-txt from-control mg-b-20" cols="10" rows="5">{{ $service->description }}</textarea>
                            </div>
                            <div class="mb-3 contact-btom">
                                <button class="btn contact-bt">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-top"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
