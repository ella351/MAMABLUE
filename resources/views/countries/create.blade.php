@extends('layout')

@section('content')
<div class="container mt-4">
    <h2>Add Country</h2>

    <form action="{{ route('countries.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Code</label>
            <input type="text" name="code" class="form-control" maxlength="3" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Continent</label>
            <input type="text" name="continent" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Population</label>
            <input type="number" name="population" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('countries.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
