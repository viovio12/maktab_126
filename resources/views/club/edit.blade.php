@extends('layout.template')

@section('content')
<div class="container">
    <h1>Edit Club</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('clubs.update', $club->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Club Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $club->name }}" required>
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ $club->date }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description">{{ $club->description }}</textarea>
        </div>

        <div class="mb-3">
            <label for="fee" class="form-label">Fee (optional)</label>
            <input type="number" class="form-control" id="fee" name="fee" value="{{ $club->fee }}">
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control" id="location" name="location" value="{{ $club->location }}">
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Club Image (optional)</label>
            <input type="file" class="form-control" id="image" name="image">
            @if ($club->image)
                <img src="{{ asset('storage/' . $club->image) }}" alt="Club Image" class="img-thumbnail mt-2" width="150">
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Update Club</button>
    </form>
</div>
@endsection
