<?php

/*
    ./app/vues/tags/index.php
    Liste des tags
    Variables disponibles:
      - $tags: ARRAY(OBJ tag(id, name, created_at))
  */


?>


<ul class="list">
  <?php foreach ($tags as $tag) : ?>
    <li>
      <a href="tags/<?php echo $tag->getId(); ?>/<?php echo \Noyau\Classes\Utils::slugify($tag->getName()); ?>">
        <?php echo $tag->getName(); ?>
        <!-- (<?php echo $tag->getNumberOfCurencies(); ?>) -->
      </a>
    </li>
  <?php endforeach; ?>

</ul>