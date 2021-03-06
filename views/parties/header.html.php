<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Document</title>
</head>

<body>
    <nav class="nav justify-content-center">
        <a class="nav-link" href="<?= url("home") ?>">Accueil</a>
        <a class="nav-link" href="<?= url("liste-articles") ?>">Liste de nos articles</a>
        <?php if (!empty($_SESSION['pseudo']) && $_SESSION['role'] == 'admin') { ?>
            <a class="nav-link" href="<?= url("ajout") ?>">Ajouter un article</a>
        <?php } ?>
        <?php if (empty($_SESSION['pseudo'])) { ?>
            <a class="nav-link" href="<?= url("connexion") ?>">Se connecter</a>
        <?php } else { ?>
            <a class="nav-link" href="<?= url("deconnexion") ?>">Se déconnecter</a>
        <?php } ?>
        <?php if (!empty($_SESSION['pseudo'])) { ?>
            <div class="pseudo">
                <a class="affPseudo"><?= $_SESSION['pseudo'] ?></a>
                <img class="avatar" src="<?= $_SESSION['avatar'] ?>" alt="avatar">
            <?php } ?>

    </nav>
    <div class="container text-center">