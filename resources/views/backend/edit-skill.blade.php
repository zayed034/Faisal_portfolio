@extends('backend.layouts.main')
@section('main-container')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="contact-top">
                        <h2>Edit Skill</h2>
                        <hr>
                        <form action="{{ route('admin.skill.update', $skill) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="skill_name">Skill Name</label>
                                <input type="text" name="skill_name" class="form-control" value="{{ $skill->skill_name }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="percentage">Percentage %</label>
                                <input type="number" name="percentage" class="form-control" value="{{ $skill->percentage }}" required>
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
