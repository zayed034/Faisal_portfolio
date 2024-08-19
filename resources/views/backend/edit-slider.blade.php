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
                                    <h2>Edit Slider</h2>
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
                    <h2>Edit Slider</h2>
                    <hr>
                    <form action="{{ route('admin.slider.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="background_image">Background Image</label>
                            <input type="file" name="background_image" class="from-control mg-b-20">
                            @if($slider->background_image)
                                <img src="{{ $slider->background_image_url }}" alt="Current Background Image" width="100">
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="digital_marketing">Digital Marketing</label>
                            <input type="text" name="digital_marketing" value="{{ old('digital_marketing', $slider->digital_marketing) }}" class="from-control mg-b-20">
                        </div>
                        <div class="mb-3">
                            <label for="seo_expert">SEO Expert</label>
                            <input type="text" name="seo_expert" value="{{ old('seo_expert', $slider->seo_expert) }}" class="from-control mg-b-20">
                        </div>
                        <div class="mb-3">
                            <label for="wordpress">Wordpress</label>
                            <input type="text" name="wordpress" value="{{ old('wordpress', $slider->wordpress) }}" class="from-control mg-b-20">
                        </div>
                        <div class="mb-3">
                            <label for="resume">Resume</label>
                            <input type="file" name="resume" class="from-control mg-b-20">
                            @if($slider->resume)
                                <a href="{{ $slider->resume_url }}" target="_blank">View Current Resume</a>
                            @endif
                        </div>
                        <div class="mb-3 contact-btom">
                            <button type="submit" class="btn contact-bt">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
