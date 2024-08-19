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
                                    <h2>Edit Fun Fact</h2>
                                    <p>Update the details of the fun fact</p>
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
                    <h2>Edit Fun Fact</h2>
                    <hr>
                    <form action="{{ route('admin.fun.update', $funFact->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="number">Number</label>
                            <input type="text" name="number" class="from-control mg-b-20" value="{{ $funFact->number }}" placeholder="Enter Your Number" required>
                        </div>
                        <div class="mb-3">
                            <label for="subject">Subject</label>
                            <input type="text" name="subject" class="from-control mg-b-20" value="{{ $funFact->subject }}" placeholder="Enter Your Subject" required>
                        </div>
                        <div class="mb-3 contact-btom">
                            <button type="submit" class="btn contact-bt">Update</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-top">
                    <!-- Additional Content if needed -->
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
