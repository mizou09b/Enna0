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

<x-layout>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Données</title>
    <link rel="stylesheet" href="styles.css">
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
    <h1 class="header1">Tableau des Données</h1>
    <table>
        <thead>
            <tr>
                <th>Numéro</th>
                <th>Objet</th>
                <th>Date limite</th>
                <th>Prorogé au</th>
                <th>Observation</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Rapport Annuel</td>
                <td>15/10/2024</td>
                <td>30/10/2024</td>
                <td>Aucune observation</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Proposition de Projet</td>
                <td>01/11/2024</td>
                <td>15/11/2024</td>
                <td>En attente de validation</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Réunion de suivi</td>
                <td>10/12/2024</td>
                <td>Non prorogé</td>
                <td>À confirmer</td>
            </tr>
        </tbody>
    </table>
</body>

</html>
</x-layout>
