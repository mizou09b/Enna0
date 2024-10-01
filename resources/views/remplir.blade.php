{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <table border="2">
        <thead>
            <th>titre1</th>
            <th>titre1</th>
            <th>titre1</th>
            <th>titre1</th>
        </thead>
        <tbody>
            <tr>
                <td>example1</td>
                <td>example1</td>
                <td>example1</td>
                <td>example1</td>
            </tr>
        </tbody>
    </table>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="/css/styleremplir.css">
</head>
<body>
    <div class="container">
        <h1>Formulaire d'Inscription</h1>
        <form>
            <label for="numero">Numéro :</label>
            <input type="text" id="numero" name="numero" required>

            <label for="objet">Objet :</label>
            <input type="text" id="objet" name="objet" required>

            <label for="dateLimite">Date limite :</label>
            <input type="date" id="dateLimite" name="dateLimite" required>

            <label for="proroge">Prorogé au :</label>
            <input type="date" id="proroge" name="proroge">

            <label for="observation">Observation :</label>
            <textarea id="observation" name="observation" rows="4" cols="50"></textarea>

            <button type="submit">Envoyer</button>
        </form>
    </div>
</body>
</html>
