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
                    <h2>My Education</h2>
                    <hr>
                    <form action="{{ route('admin.education.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="starting_date">Starting Date</label>
                            <input type="date" name="starting_date" class="from-control mg-b-20" placeholder="Enter Your Join Date" required>
                        </div>
                        <div class="mb-3">
                            <label for="university_name">University/College Name</label>
                            <input type="text" name="university_name" class="from-control mg-b-20" placeholder="Enter Your University/College Name" required>
                        </div>
                        <div class="mb-3">
                            <label for="subject">Subject</label>
                            <input type="text" name="subject" class="from-control mg-b-20" placeholder="Enter Your Subject Name" required>
                        </div>
                        <div class="mb-3">
                            <label for="description">Description</label>
                            <textarea name="description" placeholder="Description" class="msg-txt from-control mg-b-20" cols="10" rows="5" required></textarea>
                        </div>
                        <div class="mb-3 contact-btom">
                            <button type="submit" class="btn contact-bt">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-top">
                    <!-- Additional content (if any) -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="admin-backend">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr class="hed-table">
                                <th>Starting Date</th>
                                <th>University Name</th>
                                <th>Subject</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($educations as $education)
                                <tr>
                                    <td>{{ $education->starting_date }}</td>
                                    <td>{{ $education->university_name }}</td>
                                    <td>{{ $education->subject }}</td>
                                    <td>{{ $education->description }}</td>
                                    <td>
                                        <a href="{{ route('admin.education.edit', $education->id) }}" class="btn btn-info">Edit</a>

                                        <form action="{{ route('admin.education.destroy', $education->id) }}" method="POST" style="display:inline;">
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
