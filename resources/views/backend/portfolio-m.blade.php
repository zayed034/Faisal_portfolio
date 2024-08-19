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
                    <h2>Portfolio Main</h2>
                    <hr>
                    <form action="{{ route('admin.portfolio.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="text">Title</label>
                            <input type="text" name="title" class="from-control mg-b-20" placeholder="Enter Your Title">
                        </div>
                        <div class="mb-3">
                            <label for="text">Subject</label>
                            <input type="text" name="subject" class="from-control mg-b-20" placeholder="Enter Your Subject">
                        </div>
                        <div class="mb-3">
                            <label for="img">Image</label>
                            <input type="file" name="image" class="from-control mg-b-20">
                        </div>
                        <div class="mb-3 contact-btom">
                            <button class="btn contact-bt">Submit</button>
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
        <div class="row">
            <div class="col-md-8">
                <div class="admin-backend">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr class="hed-table">
                                <th>Title</th>
                                <th>Subject</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($portfolios as $portfolio)
                            <tr>
                                <td>{{ $portfolio->title }}</td>
                                <td>{{ $portfolio->subject }}</td>
                                <td>
                                    @if($portfolio->image)
                                    <img src="{{ asset('backend/img/' . $portfolio->image) }}" alt="{{ $portfolio->title }}" width="50">
                                    @else
                                    No Image
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.portfolio.edit', $portfolio->id) }}" class="btn btn-info">Edit</a>
                                    <form action="{{ route('admin.portfolio.destroy', $portfolio->id) }}" method="POST" style="display:inline-block;">
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
