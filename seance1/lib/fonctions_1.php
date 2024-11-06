
<?php
function afficheVar($n, $s) {
    return "$n vaut $n et $s vaut $s";
}

function n_parag($texte, $n) {
    $result = '';
    for ($i = 0; $i < $n; $i++) {
        $result .= "<p>$texte</p>";
    }
    return $result;
}

function paragrapheTronque($texte, $i) {
    return "<p>" . substr($texte, 0, $i) . "</p>";
}

function diminue($texte) {
    $result = '';
    for ($i = strlen($texte); $i >= 0; $i--) {
        $result .= "<p>" . substr($texte, 0, $i) . "</p>";
    }
    return $result;
}

function diminueListe($texte) {
    $result = "<ul>";
    for ($i = strlen($texte); $i >= 0; $i--) {
        $result .= "<li>" . substr($texte, 0, $i) . "</li>";
    }
    $result .= "</ul>";
    return $result;
}

function multiplication($a, $b) {
    return "<li>$a * $b = " . ($a * $b) . "</li>";
}

function tableMultiplication($a) {
    $result = "<ul>";
    for ($i = 1; $i <= 9; $i++) {
        $result .= multiplication($a, $i);
    }
    $result .= "</ul>";
    return $result;
}

function tablesMultiplications() {
    $result = "";
    for ($i = 1; $i <= 9; $i++) {
        $result .= "<h3>Table de $i</h3>";
        $result .= tableMultiplication($i);
    }
    return $result;
}

function ligneEntete() {
    $result = "<tr><th>*</th>";
    for ($i = 1; $i <= 9; $i++) {
        $result .= "<th>$i</th>";
    }
    $result .= "</tr>";
    return $result;
}

function ligneTable($i) {
    $result = "<tr><th>$i</th>";
    for ($j = 1; $j <= 9; $j++) {
        $result .= "<td>" . ($i * $j) . "</td>";
    }
    $result .= "</tr>";
    return $result;
}

function tableauMult() {
    $result = "<table id='multiplications'>";
    $result .= ligneEntete();
    for ($i = 1; $i <= 9; $i++) {
        $result .= ligneTable($i);
    }
    $result .= "</table>";
    return $result;
}

function paragraphesAvecPlus($chaine) {
    $parts = explode('+', $chaine);
    $result = '';
    foreach ($parts as $part) {
        $result .= "<p>" . trim($part) . "</p>";
    }
    return $result;
}

function enSpan($s) {
    $parts = explode(' - ', $s);
    $result = '';
    foreach ($parts as $part) {
        $result .= "<span>" . trim($part) . "</span>";
    }
    return $result;
}
?>
