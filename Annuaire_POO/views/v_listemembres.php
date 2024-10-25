<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Prénom</th>
        <th scope="col">Nom</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($les_membres as $un_membre) : ?>
        <tr>
            <th><?= $un_membre['id'] ?></th>
            <td><?= $un_membre['prenom'] ?></td>
            <td><?= $un_membre['nom'] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<ul>
    <li><a href='index.php'>retour accueil</a></li>
</ul>
