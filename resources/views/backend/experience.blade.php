@extends('backend.layouts.main')

@section('main-container')
<div class="breadcome-area">
    <!-- ... (same as your original code) -->
</div>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="contact-top">
                    <h2>My Experience</h2>
                    <hr>
                    <form action="{{ route('admin.experience.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="text">Joining Date</label>
                            <input type="text" name="date" class="from-control mg-b-20" placeholder="Enter Your Join Date" required>
                        </div>
                        <div class="mb-3">
                            <label for="text">Designation</label>
                            <input type="text" name="designation" class="from-control mg-b-20" placeholder="Enter Your Designation" required>
                        </div>
                        <div class="mb-3">
                            <label for="text">Company Name</label>
                            <input type="text" name="companyname" class="from-control mg-b-20" placeholder="Enter Your Company Name" required>
                        </div>
                        <div class="mb-3">
                            <label for="text">Description</label>
                            <textarea name="description" placeholder="Description" class="form-control" cols="10" rows="5" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="img">Image</label>
                            <input type="file" name="file" class="from-control mg-b-20">
                        </div>
                        {{--  <div class="mb-3 contact-btom">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>  --}}
                        <div class="mb-3 contact-btom">
                            <button type="submit" class="btn contact-bt">Submit</button>
                           </div>
                    </form>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-top">
                    <!-- Additional content here if needed -->
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="admin-backend">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr class="hed-table">
                                <th>Joining Date</th>
                                <th>Designation</th>
                                <th>Company Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($experiences as $experience)
                                <tr>
                                    <td>{{ $experience->joining_date }}</td>
                                    <td>{{ $experience->designation }}</td>
                                    <td>{{ $experience->company_name }}</td>
                                    <td>{{ $experience->description }}</td>
                                    <td>
                                        @if($experience->image)
                                            <img src="{{ Storage::url('public/experiences/' . $experience->image) }}" alt="Image" style="width: 100px;">
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.experience.edit', $experience->id) }}" class="btn btn-info">Edit</a>
                                        <form action="{{ route('admin.experience.destroy', $experience->id) }}" method="POST" style="display:inline;">
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
