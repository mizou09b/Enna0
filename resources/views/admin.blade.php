{{-- <h1>User access</h1>
<br>

<form action="admin" method="POST">
    <label for="username"></label>
    <input type="text" name="username" id="username" placeholder="username">
    <br>
    <label for="mdp"></label>
    <input type="password" name="mdp" id="mdp" placeholder="mot de pass">
    <br>
    <button type="submit">Submit</button>
</form> --}}

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum admin</title>
    <link rel="stylesheet" href="/css/styleadmin.css">
</head>

<body>
    <div class="container">
        <h1>Enna</h1>
        <form action="admin" method="POST">
            @csrf
            <div class="form-group">
                <label for="username">Nom d'utilisateur :</label>
                <input value="{{ old('username') }}" type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Se connecter</button>
        </form>
    </div>
</body>

</html>
