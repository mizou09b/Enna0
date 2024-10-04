{{-- <x-layout>
    <h1>Offres page</h1>
    <br><br>

    <table border="2">
        <thead>
            <th>Numero</th>
            <th>objet</th>
            <th>Observation</th>
            <th>titre1</th>
        </thead>
        <tbody>
            <td>ex1</td>
            <td>ex1</td>
            <td>ex1</td>
            <td>ex1</td>
        </tbody>
    </table>
</x-layout> --}}


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Tableau de Données</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            /* margin: 20px; */
            background-color: #f4f4f4;
        }

        .header1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>

<body>
    @if (session()->has('success'))
        <div class="container container-narrow mt-3">
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
        </div>
    @endif
        </div>
        </div>

    <h1 class="header1">Tableau des Données</h1>
    <table>
        <thead>
            <tr>
                <th>Numéro</th>
                <th>Objet</th>
                <th>Date limite</th>
                {{-- <th>Prorogé au</th> --}}
                <th>Observation</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($offres as $offre )
            <tr>
                <td> {{ $offre->numero }} </td>
                <td> {{ $offre->objet }} </td>
                <td> {{ $offre->date_Limite }} </td>
                <td> {{ $offre->observation }} </td>
                <td>
                    <a href="{{route('edit_offre', $offre->id)}}" class="btn btn-info">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</body>

</html>
