@extends('layout.template')

@section('content')
    <div class="container">
        <h1>Create New Teacher</h1>

        <!-- Teacher Create Form -->
        <form action="{{ route('teachers.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" required>
            </div>

            <div class="form-group">
                <label for="image">Teacher Image</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>

            <button type="submit" class="btn btn-success">Save Teacher</button>
            <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Back to List</a>
        </form>
    </div>
@endsection
