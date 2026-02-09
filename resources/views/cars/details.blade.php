<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Car Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <div class="card">
        <div class="card-header bg-info text-white">
            <h3>{{ $car->brand }} {{ $car->model }}</h3>
        </div>
        <div class="card-body">
            <p><strong>Year:</strong> {{ $car->year }}</p>
            <p><strong>Color:</strong> {{ $car->color }}</p>
            <p><strong>Price:</strong> ${{ number_format($car->price, 2) }}</p>
            <p><strong>Added On:</strong> {{ $car->created_at->format('M d, Y') }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('cars.index') }}" class="btn btn-secondary">Back to List</a>
            <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-warning">Edit</a>
        </div>
    </div>

</body>
</html>
