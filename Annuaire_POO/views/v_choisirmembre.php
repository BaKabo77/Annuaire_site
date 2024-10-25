<form method="post" action="index.php?uc=gerer&action=modifier">
    <select class="form-select" aria-label="Default select example" name="id">
        <?php foreach ($les_membres as $un_membre) : ?>
            <option name="<?=$un_membre['id']?>" value="<?=$un_membre['id']?>"><?=$un_membre['nom']." ".$un_membre['prenom'] ?></option>
        <?php endforeach; ?>
    </select>
    <button type="submit" class="btn btn-primary">Valider</button>
</form>
