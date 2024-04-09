<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sua Página</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Código FIPE</th>
                <th>Preço</th>
                <th>editar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $car)
            <tr>
                <td>{{ $car->name }}</td>
                <td>{{ $car->fipe_code }}</td>
                <td>R$ {{ number_format($car->price, 2, ',', '.') }}</td>
                <td>
                    <a href="{{ route('cars.edit', $car->id) }}">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <style>

table {
    width: 80%;
    margin: auto;
    border-collapse: collapse;
  }

  th {
    background-color: #007bff;
    color: #fff;
    padding: 8px;
    text-align: center;
  }

  td {
    background-color: #f8f9fa;
    color: #212529;
    padding: 8px;
    text-align: center;
  }

  tr:nth-child(odd) {
    background-color: #e9ecef;
  }

    </style>
</body>
</html>
