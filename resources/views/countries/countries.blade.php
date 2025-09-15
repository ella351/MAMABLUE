<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countries List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4 bg-light">
    <div class="container">
<<<<<<< HEAD
        <!-- Title -->
        <h1 class="mb-4 text-center">Countries</h1>

        <!-- Success Message -->
=======
        <h1 class="mb-4 text-center">Countries ({{ $countries->count() }})</h1>

>>>>>>> 9869a01e7514b1db08f7ba7b364e762bf5e67bfc
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

<<<<<<< HEAD
        <!-- Add Country Button -->
        <div class="d-flex justify-content-end mb-3">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCountryModal">
                + Add Country
            </button>
        </div>

        <!-- Countries Table -->
=======
>>>>>>> 9869a01e7514b1db08f7ba7b364e762bf5e67bfc
        <table class="table table-striped table-bordered shadow-sm">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Continent</th>
                    <th>Population</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($countries as $country)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $country->name }}</td>
                    <td>{{ $country->code }}</td>
                    <td>{{ $country->continent }}</td>
                    <td>{{ number_format($country->population) }}</td>
<<<<<<< HEAD
                    <td class="d-flex gap-2">
                        <!-- Edit Button -->
                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editCountryModal{{ $country->id }}">
                            Edit
                        </button>

                        <!-- Delete Button -->
=======
                    <td>
>>>>>>> 9869a01e7514b1db08f7ba7b364e762bf5e67bfc
                        <form action="{{ route('countries.destroy', $country->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this country?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
<<<<<<< HEAD

                <!-- Edit Country Modal -->
                <div class="modal fade" id="editCountryModal{{ $country->id }}" tabindex="-1" aria-labelledby="editCountryLabel{{ $country->id }}" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <form action="{{ route('countries.update', $country->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-header">
                          <h5 class="modal-title" id="editCountryLabel{{ $country->id }}">Edit Country</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
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
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                          <button type="submit" class="btn btn-success">Update</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
=======
>>>>>>> 9869a01e7514b1db08f7ba7b364e762bf5e67bfc
                @endforeach
            </tbody>
        </table>
    </div>
<<<<<<< HEAD

    <!-- Add Country Modal -->
    <div class="modal fade" id="addCountryModal" tabindex="-1" aria-labelledby="addCountryLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <form action="{{ route('countries.store') }}" method="POST">
            @csrf
            <div class="modal-header">
              <h5 class="modal-title" id="addCountryLabel">Add Country</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
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
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Bootstrap JS (required for modal) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
=======
>>>>>>> 9869a01e7514b1db08f7ba7b364e762bf5e67bfc
</body>
</html>