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
                                    <p>Welcome to Faisal <span class="bread-ntd">Admin Panel</span></p>
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

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="contact-top">
                    <h2>My Slider</h2>
                    <hr>
                    <form action="{{ route('admin.slider.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="background_image">Background Image</label>
                            <input type="file" name="background_image" class="from-control mg-b-20">
                        </div>
                        <div class="mb-3">
                            <label for="digital_marketing">Digital Marketing</label>
                            <input type="text" name="digital_marketing" class="from-control mg-b-20" placeholder="Enter Your Digital Marketing">
                        </div>
                        <div class="mb-3">
                            <label for="seo_expert">SEO Expert</label>
                            <input type="text" name="seo_expert" class="from-control mg-b-20" placeholder="Enter Your SEO Expert">
                        </div>
                        <div class="mb-3">
                            <label for="wordpress">Wordpress</label>
                            <input type="text" name="wordpress" class="from-control mg-b-20" placeholder="Enter Your Wordpress">
                        </div>
                        <div class="mb-3">
                            <label for="resume">Resume</label>
                            <input type="file" name="resume" class="from-control mg-b-20">
                        </div>
                        <div class="mb-3 contact-btom">
                            <button type="submit" class="btn contact-bt">Submit</button>
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
                                <th>Background Image</th>
                                <th>Digital Marketing</th>
                                <th>SEO Expert</th>
                                <th>Wordpress</th>
                                <th>Resume</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sliders as $slider)
                            <tr>
                                <td><img src="{{ asset('storage/' . $slider->background_image) }}" alt="Background Image" width="50"></td>
                                <td>{{ $slider->digital_marketing }}</td>
                                <td>{{ $slider->seo_expert }}</td>
                                <td>{{ $slider->wordpress }}</td>
                                <td><a href="{{ asset('storage/' . $slider->resume) }}" target="_blank">View Resume</a></td>
                                <td>
                                    <a href="{{ route('admin.slider.edit', $slider->id) }}" class="btn btn-info">Edit</a>
                                    <form action="{{ route('admin.slider.destroy', $slider->id) }}" method="POST" style="display:inline;">
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
