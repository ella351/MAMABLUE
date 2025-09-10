<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Country</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4 bg-light">
    <div class="container">
        <h2 class="mb-4">Edit Country</h2>

        <!-- Success message -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('countries.update', $country->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" value="{{ $country->name }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Code</label>
                <input type="text" name="code" value="{{ $country->code }}" class="form-control" required maxlength="3">
            </div>

            <div class="mb-3">
                <label class="form-label">Continent</label>
                <input type="text" name="continent" value="{{ $country->continent }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Population</label>
                <input type="number" name="population" value="{{ $country->population }}" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('countries.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
</body>
</html>