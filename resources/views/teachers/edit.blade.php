@extends('layout.template')

@section('content')
    <div class="container">
        <h1>Edit Teacher</h1>

        <!-- Teacher Edit Form -->
        <form action="{{ route('teachers.update', $teacher->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $teacher->name }}" required>
            </div>

            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" value="{{ $teacher->subject }}" required>
            </div>

            <div class="form-group">
                <label for="image">Teacher Image</label>
                <input type="file" class="form-control" id="image" name="image">
                @if($teacher->image)
                    <p>Current Image: <img src="{{ asset('storage/' . $teacher->image) }}" alt="Teacher Image" width="100"></p>
                @endif
            </div>

            <button type="submit" class="btn btn-success">Update Teacher</button>
            <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Back to List</a>
        </form>
    </div>
@endsection
