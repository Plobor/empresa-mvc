<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
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
        .form-container {
            border: 1px solid #ddd;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .form-container h2 {
            margin: 0;
            font-size: 2em;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .form-group button {
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #0056b3;
        }
        .btn {
            display: inline-block;
            padding: 8px 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
            text-decoration: none;
            color: #007bff;
            background-color: #fff;
            text-align: center;
        }
        .btn:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <h1>Edit Product</h1>

        <div class="form-container">
            <form action="{{ route('products.update', $product->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="nombre">Name:</label>
                    <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $product->nombre) }}" required>
                </div>

                <div class="form-group">
                    <label for="descripcion">Description:</label>
                    <textarea id="descripcion" name="descripcion" rows="4" required>{{ old('descripcion', $product->descripcion) }}</textarea>
                </div>

                <div class="form-group">
                    <label for="pvp">Price:</label>
                    <input type="number" id="pvp" name="pvp" value="{{ old('pvp', $product->pvp) }}" step="0.01" required>
                </div>

                <div class="form-group">
                    <label for="tipo">Type:</label>
                    <input type="text" id="tipo" name="tipo" value="{{ old('tipo', $product->tipo) }}" required>
                </div>

                <div class="form-group">
                    <button type="submit">Update Product</button>
                </div>
            </form>

            <a href="{{ route('home') }}" class="btn">Back to Home</a>
        </div>
    </div>
</body>
</html>
