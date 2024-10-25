<form class="form" action="index.php?cu=gerer&action=modifMembre&id=<?=$unMembre['id']?>" method="post">


<div class="form-group">
    
    <label class="form-label" for="nom">Nom du membre </label>
    <input class="form-control" type="text" value="<?=$unMembre['nom']?>" name="nom">
</div>

<div class="form-group">
    <label for="prenom">Prenom du membre </label>
    <input class="form-control" type="text" value="<?=$unMembre['prenom']?>" name="prenom">
    
</div>

<input class="mt-3 btn btn-primary" type="submit" value="modifier">

</form>