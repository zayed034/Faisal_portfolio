@extends('backend.layouts.main')
@section('main-container')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="contact-top">
                <h2>Social Media</h2>
            <form action="{{ route('admin.social-media.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="facebook">Facebook</label>
                    <input type="text" name="facebook" class="from-control mg-b-20" placeholder="Enter Your Facebook link">
                </div>
                <div class="mb-3">
                    <label for="twitter">Twitter</label>
                    <input type="text" name="twitter" class="from-control mg-b-20" placeholder="Enter Your Twitter link">
                </div>
                <div class="mb-3">
                    <label for="youtube">Youtube</label>
                    <input type="text" name="youtube" class="from-control mg-b-20" placeholder="Enter Your Youtube link">
                </div>
                <div class="mb-3">
                    <label for="linkedin">Linkedin</label>
                    <input type="text" name="linkedin" class="from-control mg-b-20" placeholder="Enter Your Linkedin link">
                </div>
                <button type="submit" class="btn contact-bt">Submit</button>
            </form>
            </div>
        </div>
        <div class="col-md-4">
            <!-- Optional right side content -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="admin-backend">
                <h3>Social Media Links</h3>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr class="hed-table">
                        <th>Facebook</th>
                        <th>Twitter</th>
                        <th>Youtube</th>
                        <th>Linkedin</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($socials as $social)
                    <tr>
                        <td>{{ $social->facebook }}</td>
                        <td>{{ $social->twitter }}</td>
                        <td>{{ $social->youtube }}</td>
                        <td>{{ $social->linkedin }}</td>
                        <td>
                            <a href="{{ route('admin.social-media.edit', $social->id) }}" class="btn btn-info">Edit</a>
                            <form action="{{ route('admin.social-media.destroy', $social->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    @endforeach
                </tbody>
            </table>
        </div>
            </div>
    </div>
</div>
@endsection
