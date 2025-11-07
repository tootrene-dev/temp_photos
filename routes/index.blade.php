@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Photos List</h2>

    <table class="table table-bordered table-striped mt-3">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Photo Title</th>
                <th>Image</th>
                <th>Uploaded At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($photos as $photo)
                <tr>
                    <td>{{ $photo->id }}</td>
                    <td>{{ $photo->title }}</td>
                    <td><img src="{{ asset('storage/' . $photo->image_path) }}" width="100"></td>
                    <td>{{ $photo->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
