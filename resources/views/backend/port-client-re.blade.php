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
                        <h2>Client Review</h2>
                        <hr>
                        <form action="{{ route('admin.port-client-re.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="image">Image</label>
                                <input type="file" name="image" class="from-control mg-b-20">
                            </div>
                            <div class="mb-3">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="from-control mg-b-20" placeholder="Enter Your Name">
                            </div>
                            <div class="mb-3">
                                <label for="designation">Designation</label>
                                <input type="text" name="designation" class="from-control mg-b-20" placeholder="Enter Your Designation">
                            </div>
                            <div class="mb-3">
                                <label for="description">Description</label>
                                <textarea name="description" placeholder="Message" class="msg-txt from-control mg-b-20" cols="10" rows="5"></textarea>
                            </div>
                            <div class="mb-3 contact-btom">
                                <button type="submit" class="btn contact-bt">Submit</button>
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
            <div class="row">
                <div class="col-md-8">
                    <div class="admin-backend">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr class="hed-table">
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reviews as $review)
                                    <tr>
                                        <td><img src="{{ $review->image ? Storage::url($review->image) : '' }}" alt="" width="100"></td>
                                        <td>{{ $review->name }}</td>
                                        <td>{{ $review->designation }}</td>
                                        <td>{{ $review->description }}</td>
                                        <td>
                                            <a href="{{ route('admin.port-client-re.edit', $review) }}" class="btn btn-info">Edit</a>
                                            <form action="{{ route('admin.port-client-re.destroy', $review) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
