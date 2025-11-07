<!
DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Photos Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <h2 class="mb-3">Photos Table Data</h2>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Filename</th>
                <th>Path</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>
            @forelse($photos as $photo)
                <tr>
                    <td>{{ $photo->id }}</td>
                    <td>{{ $photo->filename }}</td>
                    <td>{{ $photo->path }}</td>
                    <td>{{ $photo->created_at }}</td>
                    <td>{{ $photo->updated_at }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center text-muted">No photos found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
