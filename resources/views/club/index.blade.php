@extends('layout.template')

@section('content')
    <div class="container">
        <h1>Admin Dashboard</h1>
        
        <!-- Teachers Section -->
       

        <!-- Courses Section -->


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
                @if(isset($club) && count($club) > 0)
                    @foreach($club as $club)
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
