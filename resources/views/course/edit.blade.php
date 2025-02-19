@extends('layout.template')

@section('content')
    <div class="container">
        <h1>Edit Course</h1>

        <form action="{{ route('courses.update', $course->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Course Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $course->name }}" required>
            </div>

            <div class="mb-3">
                <label for="rating" class="form-label">Rating</label>
                <input type="number" name="rating" id="rating" class="form-control" value="{{ $course->rating }}" min="1" max="5" required>
            </div>

            <button type="submit" class="btn btn-success">Update Course</button>
        </form>
    </div>
@endsection
