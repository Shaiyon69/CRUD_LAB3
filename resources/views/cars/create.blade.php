<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Car</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2>Add New Car</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('cars.store') }}" method="POST">
        @csrf
        <div class="mb-3"><label>Brand</label><input type="text" name="brand" class="form-control"></div>
        <div class="mb-3"><label>Model</label><input type="text" name="model" class="form-control"></div>
        <div class="mb-3"><label>Year</label><input type="number" name="year" class="form-control"></div>
        <div class="mb-3"><label>Color</label><input type="text" name="color" class="form-control"></div>
        <div class="mb-3"><label>Price</label><input type="number" step="0.01" name="price" class="form-control"></div>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('cars.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</body>
</html>
