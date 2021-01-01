<?php

  /*
    ./app/vues/categories/index.php
    Liste des categories
    Variables disponibles:
      - $categories: ARRAY(OBJ Categorie(id, name, created_at))
  */


?>

<ul class="list cat-list">
  <?php foreach ($categories as $categorie): ?>
    <li>
        <a href="categories/<?php echo $categorie->getId(); ?>/<?php echo \Noyau\Classes\Utils::slugify($categorie->getName()); ?>" class="d-flex">
            <p><?php echo $categorie->getName(); ?></p>
            <p>(<?php echo $categorie->getNumberOfCurencies(); ?>)</p>
        </a>
    </li>
  <?php endforeach; ?>
</ul> 



