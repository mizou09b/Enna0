{{-- no styles --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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

    <div class="container mt-5">
        <h1 class="mb-4">Ajouter un offre</h1>
        <form action="/offrePublier" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="numero" class="form-label">Numéro :</label>
                <input type="text" id="numero" name="numero" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="objet" class="form-label">Objet :</label>
                <input type="text" id="objet" name="objet" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="date_Limite" class="form-label">Date limite :</label>
                <input type="date" id="date_Limite" name="date_Limite" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="proroge" class="form-label">Prorogé au :</label>
                <input type="date" id="date_proroge" name="date_proroge" class="form-control">
            </div>

            <div class="mb-3">
                <label for="pdf" class="form-label">Upload PDF:</label>
                <input type="file" name="pdf" id="pdf" class="form-control" accept="application/pdf">
            </div>

            <div class="mb-3">
                <label for="observation" class="form-label">Observation :</label>
                <textarea id="observation" name="observation" class="form-control" rows="4" cols="50"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
        <div class="container d-flex pb-4">
            <form action="adminLogout" method="POST" onsubmit="return confirmLogout()">
                @csrf
                <button class="btn btn-danger mt-4" type="submit">Déconnecter</button>
            </form>
            <span><button class="btn btn-info ms-2"><a href="/offres">Consulter les offres</a></button></span>
        </div>
    </div>

    <script>
        function confirmLogout() {
            return confirm("Êtes-vous sûr de vouloir vous déconnecter ?");
        }
    </script>

    </div>
    </div>
</body>

</html>
