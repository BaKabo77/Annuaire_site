# Application Annuaire de Club de Bridge

## Présentation du projet

Cette application web, développée en PHP avec une architecture MVC, permet de gérer l'annuaire des membres d'un club de bridge pendant les compétitions. Elle offre une interface intuitive pour lister, ajouter et supprimer des membres.


## Technologies utilisées

- **Backend**: PHP (POO)
- **Frontend**: HTML5, CSS3, Bootstrap 5
- **Architecture**: Modèle-Vue-Contrôleur (MVC)
- **Base de données**: MySQL
- **Environnement de développement**: XAMPP/WAMP

## Fonctionnalités

- ✅ **Consultation**: Affichage de la liste des membres du club
- ✅ **Ajout**: Formulaire d'inscription d'un nouveau membre
- ✅ **Suppression**: Possibilité de retirer un membre de l'annuaire
- ✅ **Navigation intuitive**: Interface utilisateur simple et efficace

## Installation

1. **Prérequis**:
   - Serveur PHP (version 7.4 ou supérieure recommandée)
   - Serveur MySQL
   - Environnement XAMPP, WAMP ou équivalent

2. **Étapes d'installation**:
   ```bash
   # Cloner le dépôt
   git clone https://github.com/BaKabo77/Annuaire_site.git
   
   # Naviguer vers le répertoire du projet
   cd Annuaire_site/Annuaire_POO
   
   # Importer la base de données
   # Utilisez phpMyAdmin ou la ligne de commande MySQL pour importer le fichier annuaire.sql
   ```

3. **Configuration**:
   - Modifiez les paramètres de connexion à la base de données dans le modèle si nécessaire

## Structure du projet

```
Annuaire_POO/
│
├── controllers/         # Contrôleurs de l'application
│   └── c_gerer.php      # Gestion des actions utilisateur
│
├── models/              # Modèles pour l'accès aux données
│   └── m_model.php      # Requêtes SQL et logique métier
│
├── views/               # Vues de l'application
│   ├── v_accueil.php    # Page d'accueil
│   ├── v_listemembres.php # Affichage des membres
│   ├── v_saisiemembre.php # Formulaire d'ajout
│   └── v_deletemembre.php # Interface de suppression
│
├── images/              # Ressources graphiques
├── index.php            # Point d'entrée unique
├── annuaire.sql         # Script de création de la base de données
└── README.md            # Documentation
```

## Architecture MVC

Cette application suit le pattern MVC (Modèle-Vue-Contrôleur) :

- **Modèle** (`models/`) : Contient la logique métier et les interactions avec la base de données
- **Vue** (`views/`) : Gère l'affichage et l'interface utilisateur
- **Contrôleur** (`controllers/`) : Coordonne les actions entre le modèle et les vues

Le fichier `index.php` sert de point d'entrée unique et achemine les requêtes vers le contrôleur approprié.

## Utilisation

1. Accédez à l'application via votre navigateur : `http://localhost/Annuaire_site/Annuaire_POO/`
2. Utilisez le menu de navigation pour accéder aux différentes fonctionnalités :
   - **Accueil** : Page principale de l'application
   - **Lister les membres** : Affiche tous les membres enregistrés
   - **Ajouter un membre** : Formulaire d'ajout d'un nouveau membre
   - **Supprimer un membre** : Interface pour retirer un membre de l'annuaire


## Contribution

Les contributions sont les bienvenues ! N'hésitez pas à suggérer des améliorations ou à signaler des bugs.

1. Forkez le projet
2. Créez une branche pour votre fonctionnalité (`git checkout -b feature/nouvelle-fonctionnalite`)
3. Committez vos changements (`git commit -am 'Ajout d'une nouvelle fonctionnalité'`)
4. Poussez votre branche (`git push origin feature/nouvelle-fonctionnalite`)
5. Ouvrez une Pull Request

## Licence

Ce projet est distribué sous licence open source.

## Contact

Pour toute question ou suggestion, n'hésitez pas à me contacter via GitHub ou par email.

---

Projet réalisé dans le cadre d'un exercice de développement web par BaKabo77.
