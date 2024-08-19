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
                        <h2>My Services</h2>
                        <hr>
                        <form action="{{ route('admin.service.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="text">Service Name</label>
                                <input type="text" name="servicename" class="from-control mg-b-20" placeholder="Enter Your Service Name">
                            </div>
                            <div class="mb-3">
                                <label for="text">Description</label>
                                <textarea name="description" placeholder="Description" class="msg-txt from-control mg-b-20" cols="10" rows="5"></textarea>
                            </div>
                            <div class="mb-3 contact-btom">
                                <button class="btn contact-bt">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-top"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="admin-backend">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr class="hed-table">
                                    <th>Service Name</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($services as $service)
                                    <tr>
                                        <td>{{ $service->service_name }}</td>
                                        <td>{{ $service->description }}</td>
                                        <td>
                                            <a href="{{ route('admin.service.edit', $service->id) }}" class="btn btn-info">Edit</a>
                                            <form action="{{ route('admin.service.destroy', $service->id) }}" method="POST" style="display:inline;">
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
