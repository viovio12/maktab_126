@extends('layout.template')

@section('content')
    <div class="container">
        <h1>Admin Dashboard</h1>
        
        <!-- Teachers Section -->
        <h2>Teachers</h2>
        <a href="{{ route('teachers.create') }}" class="btn btn-primary">Add New Teacher</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Subject</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($teachers as $teacher)
                    <tr>
                        <td>{{ $teacher->name }}</td>
                        <td>{{ $teacher->subject }}</td>
                        <td>
                            <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

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
        <h2>Clubs</h2>
        <a href="{{ route('clubs.create') }}" class="btn btn-primary">Add New Club</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($clubs) && count($clubs) > 0)
                    @foreach($clubs as $club)
                        <tr>
                            <td>{{ $club->name }}</td>
                            <td>{{ $club->location }}</td>
                            <td>
                                <a href="{{ route('clubs.edit', $club->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('clubs.destroy', $club->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr><td colspan="3">No clubs found.</td></tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection
