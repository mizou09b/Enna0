<x-layout>
@if (session()->has('success'))
<div class="container container-narrow mt-3">
    <div class="alert alert-success text-center">
        {{ session('success') }}
    </div>
</div>
@endif

<div class="container mt-5">
    <h1 class="mb-4">Formulaire d'Inscription</h1>
    <form action="/offrePublier" method="POST">
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
            <input type="date" id="proroge" name="proroge" class="form-control">
        </div>

        <div class="mb-3">
            <label for="observation" class="form-label">Observation :</label>
            <textarea id="observation" name="observation" class="form-control" rows="4" cols="50"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
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

</div>
</div>
</x-layout>
