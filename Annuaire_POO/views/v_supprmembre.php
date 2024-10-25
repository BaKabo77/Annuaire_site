<form method="post" action="index.php?uc=gerer&action=deleteMembre">
    <select class="form-select" aria-label="Default select example" name="id">
        <?php foreach ($les_membres as $un_membre) : ?>
            <option name="<?=$un_membre['id']?>" value="<?=$un_membre['id']?>"><?=$un_membre['nom']." ".$un_membre['prenom'] ?></option>
        <?php endforeach; ?>
    </select>
    <button onclick="alert('les données seront définitivement supprimées')" type="submit" class="btn btn-primary">Supprimer</button>
</form>