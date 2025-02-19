@extends('layout.template')

@section('content')
    <div class="container">
        <h1>Admin Dashboard</h1>
        
        <!-- Teachers Section -->
       
        <!-- Courses Section -->
        <h2>Courses</h2>
        <a href="{{ route('courses.create') }}" class="btn btn-primary">Add New Course</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Rating</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($courses) && count($courses) > 0)
                    @foreach($courses as $course)
                        <tr>
                            <td>{{ $course->name }}</td>
                            <td>{{ $course->rating }}</td>
                            <td>
                                <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr><td colspan="3">No courses found.</td></tr>
                @endif
            </tbody>
        </table>

        <!-- Clubs Section -->
       
    </div>
@endsection
