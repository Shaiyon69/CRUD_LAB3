<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Car List</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        nav svg {
            max-height: 20px;
            max-width: 20px;
        }
        
        .pagination {
            margin-bottom: 0;
        }
    </style>
</head>
<body class="container mt-5">

    <h1 class="mb-4">Car Management System</h1>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="d-flex justify-content-between mb-3">
        <a href="{{ route('cars.create') }}" class="btn btn-primary">Add New Car</a>

        <div class="d-flex">
            <input 
                type="text" 
                id="searchInput" 
                class="form-control" 
                placeholder="Type to search..." 
                autocomplete="off"
            >
        </div>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Brand</th>
                <th>Model</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="tableBody">
            @foreach($cars as $car)
            <tr>
                <td>{{ $car->brand }}</td>
                <td>{{ $car->model }}</td>
                <td>${{ number_format($car->price, 2) }}</td>
                <td>
                    <a href="{{ route('cars.show', $car->id) }}" class="btn btn-sm btn-info text-white">Details</a>
                    <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    
                    <form action="{{ route('cars.destroy', $car->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-center mt-4">
        {{ $cars->links() }}
    </div>

<script>
    const searchInput = document.getElementById('searchInput');
    const tableBody = document.getElementById('tableBody');
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    searchInput.addEventListener('keyup', function() {
        let query = this.value;

        fetch(`/api/cars?search=${query}`)
            .then(response => response.json())
            .then(data => {
                let rows = '';
                let carList = data.data ? data.data : data;

                if (carList.length > 0) {
                    carList.forEach(car => {
                        rows += `
                            <tr>
                                <td>${car.brand}</td>
                                <td>${car.model}</td>
                                <td>$${new Intl.NumberFormat('en-US', { minimumFractionDigits: 2 }).format(car.price)}</td>
                                <td>
                                    <a href="/cars/${car.id}" class="btn btn-sm btn-info text-white">Details</a>
                                    <a href="/cars/${car.id}/edit" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="/cars/${car.id}" method="POST" style="display:inline-block;">
                                        <input type="hidden" name="_token" value="${csrfToken}">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        `;
                    });
                } else {
                    rows = `<tr><td colspan="4" class="text-center text-muted">No cars found</td></tr>`;
                }

                tableBody.innerHTML = rows;
            })
            .catch(error => console.error('Error:', error));
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>