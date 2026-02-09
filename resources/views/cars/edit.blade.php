<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Car</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2>Edit Car</h2>

    <form action="{{ route('cars.update', $car->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Brand</label>
            <input type="text" name="brand" class="form-control" value="{{ $car->brand }}">
        </div>
        <div class="mb-3">
            <label>Model</label>
            <input type="text" name="model" class="form-control" value="{{ $car->model }}">
        </div>
        <div class="mb-3">
            <label>Year</label>
            <input type="number" name="year" class="form-control" value="{{ $car->year }}">
        </div>
        <div class="mb-3">
            <label>Color</label>
            <input type="text" name="color" class="form-control" value="{{ $car->color }}">
        </div>
        <div class="mb-3">
            <label>Price</label>
            <input type="number" step="0.01" name="price" class="form-control" value="{{ $car->price }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('cars.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</body>
</html>
<!-- Danlel711-cmyk -->
