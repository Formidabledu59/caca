
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Premier exercice PHP</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="iniPHP.css" />
</head>
<body>
<header>
    <h1>Premier exercice PHP</h1>
    <h2>Réalisé par <span class="nom">Ayoub Fathallah</span></h2>
</header>
<!-- Section pour afficher les questions et résultats -->
<section>
    <h2>Question <?= $num_quest++ ?></h2>
    <p>Nous sommes le <?= date('d / m / Y') ?></p>
</section>

<!-- Section pour chaque question avec les fonctions appelées -->
<section>
    <h2>Question <?= $num_quest++ ?></h2>
    <p><?= afficheVar(5, 'test de variable') ?></p>
</section>

<section>
    <h2>Question <?= $num_quest++ ?></h2>
    <p><?= n_parag("Texte de test pour plusieurs paragraphes", 3) ?></p>
</section>

<section>
    <h2>Question <?= $num_quest++ ?></h2>
    <p><?= paragrapheTronque("Ce texte sera tronqué", 10) ?></p>
</section>

<section>
    <h2>Question <?= $num_quest++ ?></h2>
    <p><?= diminue("Texte qui diminue") ?></p>
</section>

<section>
    <h2>Question <?= $num_quest++ ?></h2>
    <p><?= diminueListe("Texte dans une liste avec diminution") ?></p>
</section>

<section>
    <h2>Question <?= $num_quest++ ?></h2>
    <p><?= tableMultiplication(2) ?></p>
</section>

<section>
    <h2>Question <?= $num_quest++ ?></h2>
    <p><?= tablesMultiplications() ?></p>
</section>

<section>
    <h2>Question <?= $num_quest++ ?></h2>
    <p><?= tableauMult() ?></p>
</section>

<section>
    <h2>Question <?= $num_quest++ ?></h2>
    <p><?= paragraphesAvecPlus("Phrase+avec+plusieurs+paragraphes") ?></p>
</section>

<section>
    <h2>Question <?= $num_quest++ ?></h2>
    <p><?= enSpan("Dupont - Durand") ?></p>
</section>

</body>
</html>
