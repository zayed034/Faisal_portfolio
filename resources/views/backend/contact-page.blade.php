@extends('backend.layouts.main')
@section('main-container')
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-icon">
                                    <i class="icon nalika-home"></i>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>Dashboard</h2>
                                    <p>Welcome to Zayed <span class="bread-ntd">Admin Panel</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="breadcomb-report">
                                <button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="icon nalika-download"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="contact-top">
                    <h2>Contact Page</h2>
                    <hr>
                    <form action="{{ route('admin.contact.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="text">Address</label>
                            <input type="text" name="address" class="from-control mg-b-20" placeholder="Enter Your Address">
                        </div>
                        <div class="mb-3">
                            <label for="text">Email</label>
                            <input type="text" name="email" class="from-control mg-b-20" placeholder="Enter Your Email">
                        </div>
                        <div class="mb-3">
                            <label for="text">Number</label>
                            <input type="text" name="number" class="from-control mg-b-20" placeholder="Enter Your Number">
                        </div>
                        <div class="mb-3 contact-btom">
                            <button class="btn contact-bt">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-top">

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="admin-backend">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr class="hed-table">
                                <th>Address</th>
                                <th>Email</th>
                                <th>Number</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contacts as $contact)
                            <tr>
                                <td>{{ $contact->address }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->number }}</td>
                                <td>
                                    <a href="{{ route('admin.contact.edit', $contact->id) }}" class="btn btn-info">Edit</a>
                                    <form action="{{ route('admin.contact.destroy', $contact->id) }}" method="POST" style="display:inline-block;">
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
