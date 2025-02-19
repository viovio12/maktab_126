@extends('layout.template')

@section('content')
    <div class="container">
        <h1>Create New Course</h1>

        <form action="{{ route('courses.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Course Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="rating" class="form-label">Rating</label>
                <input type="number" name="rating" id="rating" class="form-control" min="1" max="5" required>
            </div>

            <button type="submit" class="btn btn-primary">Create Course</button>
        </form>
    </div>
@endsection
