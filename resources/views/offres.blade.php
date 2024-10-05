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
            background-color: #fff;
            padding: 20px;
        }

        .header1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            background-color: white;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #0f6ca6;
            color: white;
            text-transform: uppercase;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        .btn {
            margin-right: 10px;
        }

        .btn a {
            text-decoration: none;
            color: white;
        }

        .btn-info {
            background-color: #0f6ca6;
            border-color: #0f6ca6;
            /* padding: 20px; */
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .alert {
            margin-bottom: 20px;
        }

        .btn-container {
            text-align: center;
            margin-top: 20px;
        }

        /* Style pour améliorer la présentation du tableau */
        td {
            border-color: #0f6ca6;
        }

        /* Ajout d'une ombre légère pour l'effet de survol */
        tr:hover td {
            background-color: #e6f0fa;
            transition: background-color 0.3s ease;
        }

        .table-wrapper {
            overflow-x: auto;
            margin-bottom: 20px;
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
    @if (session()->has('error'))
        <div class="container container-narrow mt-3">
            <div class="alert alert-danger text-center">
                {{ session('error') }}
            </div>
        </div>
    @endif


    {{-- /////////////////////////////////////////// --}}

    @auth

        <style>
            body {
                background-color: #97bbd2
            }
        </style>

        <h1 class="header1"
            style="background-color: #0f6ca6; color: white; padding: 15px; border-radius: 10px; text-align: center; font-family: Arial, sans-serif; box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);">
            Gerer les offres
        </h1>

        <div class="table-wrapper">
            <table >
                <thead>
                    <tr>
                        <th>N˚</th>
                        <th>Référence</th>
                        <th>Objet</th>
                        <th>Date limite</th>
                        <th>Date proroge</th>
                        <th>pdf</th>
                        <th>Observation</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $ide = 1;
                    @endphp
                    @foreach ($offres as $offre)
                        <tr>
                            <td>{{ $ide }}</td>
                            <td>{{ $offre->numero }}</td>
                            <td>{{ $offre->objet }}</td>
                            <td>{{ $offre->date_Limite }}</td>
                            <td>{{ $offre->date_proroge }}</td>
                            <td>
                                @if ($offre->pdf)
                                    <a href="{{ route('pdf.download', ['pdf' => basename($offre->pdf)]) }}"
                                        target="_blank">Download PDF</a>
                                @else
                                    No PDF available
                                @endif
                            </td>
                            <td>{{ $offre->observation }}</td>
                            <td class="text-center">

                                <a href="{{ route('edit_offre', $offre->id) }}" class="btn btn-info">Modifier</a>
                                <form method="POST" action="{{ route('delete_offre', $offre->id) }}" class="d-inline"
                                    onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette offre ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                        @php
                            $ide += 1;
                        @endphp
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="btn-container">
            <a class="btn btn-info text-white border" href="/formulairOffre">Ajouter une offre</a>
        </div>

        <div class="container d-flex pb-4">
            <form action="adminLogout" method="POST" onsubmit="return confirmLogout()">
                @csrf
                <button class="btn btn-danger mt-4" type="submit">Déconnecter</button>
            </form>
        </div>
        <script>
            function confirmLogout() {
                return confirm("Êtes-vous sûr de vouloir vous déconnecter ?");
            }
        </script>
    @else
        <h1 class="header1"
            style="background-color: #0f6ca6; color: white; padding: 15px; border-radius: 10px; text-align: center; font-family: Arial, sans-serif; box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);">
            Tableau des offres
        </h1>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>N˚</th>
                        <th>Référence</th>
                        <th>Objet</th>
                        <th>Date limite</th>
                        <th>Date proroge</th>
                        <th>Pdf</th>
                        <th>Observation</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $ide = 1;
                    @endphp
                    @foreach ($offres as $offre)
                        <tr>
                            <td>{{ $ide }}</td>
                            <td>{{ $offre->numero }}</td>
                            <td>{{ $offre->objet }}</td>
                            <td>{{ $offre->date_Limite }}</td>
                            <td>{{ $offre->date_proroge }}</td>
                            <td>
                                @if ($offre->pdf)
                                    <a href="{{ route('pdf.download', ['pdf' => basename($offre->pdf)]) }}"
                                        target="_blank">
                                        {{ $offre->pdf }}
                                    </a>
                                @else
                                    No PDF available
                                @endif
                            </td>
                            <td>{{ $offre->observation }}</td>
                        </tr>
                        @php
                            $ide += 1;
                        @endphp
                    @endforeach
                </tbody>
            </table>
        </div>

    @endauth

</body>

</html>
