<!-- resources/views/backend/about.blade.php -->
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
                    <h2>About Page</h2>
                    <hr>
                    <form action="{{ route('admin.about.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="image">Image</label>
                            <input type="file" name="image" id="file" class="from-control mg-b-20">
                        </div>
                        <div class="mb-3">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="from-control mg-b-20" placeholder="Enter Your Title">
                        </div>
                        <div class="mb-3">
                            <label for="description">Description</label>
                            <textarea name="description" placeholder="Description" class="msg-txt" cols="10" rows="5"></textarea>
                        </div>
                        <div class="mb-3 contact-btom">
                            <button type="submit" class="btn contact-bt">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-top">
                    <!-- Additional content here -->
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
                                <th>Title</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($abouts as $about)
                                <tr>
                                    <td><img src="{{ asset('storage/' . $about->image) }}" width="100" alt="Image">
                                    </td>
                                    <td>{{ $about->title }}</td>
                                    <td>{{ $about->description }}</td>
                                    <td>
                                        <a href="{{ route('admin.about.edit', $about) }}" class="btn btn-info">Edit</a>
                                        <form action="{{ route('admin.about.destroy', $about) }}" method="POST" style="display:inline;">
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
