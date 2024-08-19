@extends('backend.layouts.main')
@section('main-container')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="contact-top">
                        <h2>My Skills</h2>
                        <hr>
                        <form action="{{ route('admin.skill.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="skill_name">Skill Name</label>
                                <input type="text" name="skill_name" class="from-control mg-b-20" placeholder="Enter Your Skill" required>
                            </div>
                            <div class="mb-3">
                                <label for="percentage">Percentage %</label>
                                <input type="number" name="percentage" class="from-control mg-b-20" placeholder="Enter Your %" required>
                            </div>
                            <div class="mb-3 contact-btom">
                                <button type="submit" class="btn contact-bt">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- Optional additional content -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="admin-backend">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr class="hed-table">
                                    <th>Skill Name</th>
                                    <th>Percentage</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($skills as $skill)
                                    <tr>
                                        <td>{{ $skill->skill_name }}</td>
                                        <td>{{ $skill->percentage }}%</td>
                                        <td>
                                            <a href="{{ route('admin.skill.edit', $skill) }}" class="btn btn-info">Edit</a>
                                            <form action="{{ route('admin.skill.destroy', $skill) }}" method="POST" style="display:inline;">
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
