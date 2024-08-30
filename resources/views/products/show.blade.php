<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Si usas un archivo CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            padding: 20px;
            margin: 0;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .product-list {
            list-style: none;
            padding: 0;
        }
        .product-item {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }
        .product-item h2 {
            margin: 0;
            font-size: 1.5em;
        }
        .product-item p {
            margin: 5px 0;
        }
        .pagination {
            text-align: center;
            margin: 20px 0;
        }
        .pagination a, .pagination span {
            display: inline-block;
            padding: 8px 16px;
            margin: 0 4px;
            border: 1px solid #ddd;
            border-radius: 5px;
            text-decoration: none;
            color: #007bff;
        }
        .pagination a:hover {
            background-color: #f1f1f1;
        }
        .pagination .active {
            background-color: #007bff;
            color: #fff;
        }
        .btn {
            padding: 10px 20px;
            border-radius: 5px;
            color: #fff;
            text-decoration: none;
            margin-bottom: 20px;
            display: inline-block;
        }
        .btn-primary {
            background-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .btn-warning {
            background-color: #ffc107;
        }
        .btn-warning:hover {
            background-color: #e0a800;
        }
        .btn-danger {
            background-color: #dc3545;
        }
        .btn-danger:hover {
            background-color: #c82333;
        }
        .btn-info {
            background-color: #17a2b8;
        }
        .btn-info:hover {
            background-color: #138496;
        }
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
        }
        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
        }
    </style>
</head>
<body>
      <!-- Mostrar el mensaje de estado -->
    @if(session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
      </div>
    @endif

    <div class="container">
        <h1>Product Details</h1>

        <!-- Detalles del producto -->
        <div class="product-details">
            <h2>{{ $product->nombre }}</h2>
            <p><strong>Description:</strong> {{ $product->descripcion }}</p>
            <p><strong>Price:</strong> ${{ number_format($product->pvp, 2) }}</p>
            <p><strong>Type:</strong> {{ $product->tipo }}</p>

            <!-- Botones de acción -->
            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?');">Delete</button>
            </form>
            <a href="/" class="btn btn-primary">Back to Home</a>
        </div>
    </div>
</body>
</html>
