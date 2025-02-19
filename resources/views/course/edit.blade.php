@extends('layout.template')

@section('content')
<div class="container">
    <h2>Edit Course</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('courses.update', $course->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Course Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $course->name }}" required>
        </div>

        <div class="mb-3">
            <label for="rating" class="form-label">Rating (1-5)</label>
            <input type="number" class="form-control" id="rating" name="rating" min="1" max="5" value="{{ $course->rating }}" required>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Course Image</label>
            <input type="file" class="form-control" id="image" name="image" accept="image/*">
            
            @if($course->image)
                <div class="mt-2">
                    <img src="{{ asset('storage/' . $course->image) }}" alt="Course Image" width="150">
                </div>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Update Course</button>
    </form>
</div>
@endsection
