@extends('layout')

@section('content')
<div class="container mt-4">
    <h2>Edit Country</h2>

    <form action="{{ route('countries.update', $country->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $country->name }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Code</label>
            <input type="text" name="code" class="form-control" value="{{ $country->code }}" maxlength="3" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Continent</label>
            <input type="text" name="continent" class="form-control" value="{{ $country->continent }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Population</label>
            <input type="number" name="population" class="form-control" value="{{ $country->population }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('countries.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
