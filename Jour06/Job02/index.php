<?php
function bonjour($jour) {
  if ($jour) {
    echo "Bonjour !";
  } else {
    echo "Bonsoir !";
  }
}

$jour = false;
bonjour($jour); // appel de la fonction
?>