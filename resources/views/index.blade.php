<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Trees ({{ $trees->count() }})</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<div class="container">
    <h1 class="mb-4">Trees ({{ $trees->count() }})</h1>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Type</th>
                <th>Height (m)</th>
                <th>Location</th>
            </tr>
        </thead>
        <tbody>
            @foreach($trees as $tree)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $tree->name }}</td>
                <td>{{ $tree->type }}</td>
                <td>{{ $tree->height }}</td>
                <td>{{ $tree->location }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
