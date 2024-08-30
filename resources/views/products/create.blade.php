<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
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
            border-radius: 5px;
            background-color: #f9f9f9;
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
            box-sizing: border-box;
        }
        .form-group textarea {
            resize: vertical;
        }
        .btn {
            padding: 10px 20px;
            border-radius: 5px;
            color: #fff;
            text-decoration: none;
            margin: 10px 5px;
            display: inline-block;
            text-align: center;
            border: none;
        }
        .btn-primary {
            background-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .btn-secondary {
            background-color: #6c757d;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
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
        <h1>Create New Product</h1>

        <!-- Formulario para crear un nuevo producto -->
        <div class="form-container">
            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nombre">Name:</label>
                    <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" required>
                </div>
                <div class="form-group">
                    <label for="descripcion">Description:</label>
                    <textarea id="descripcion" name="descripcion" rows="4">{{ old('descripcion') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="pvp">Price:</label>
                    <input type="number" id="pvp" name="pvp" step="0.01" value="{{ old('pvp') }}" required>
                </div>
                <div class="form-group">
                    <label for="tipo">Type:</label>
                    <input type="text" id="tipo" name="tipo" value="{{ old('tipo') }}">
                </div>
                <button type="submit" class="btn btn-primary">Create Product</button>
                <a href="/" class="btn btn-secondary">Back to Home</a>
            </form>
        </div>
    </div>
</body>
</html>
