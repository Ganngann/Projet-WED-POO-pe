<?php
/*
    ./app/vues/posts/liste.php
    Liste des posts
    Variables disponibles:
      - $posts: ARRAY(OBJ Post(id, title, content, image))
  */

use \Noyau\Classes\Utils;

?>

  <?php foreach ($posts as $post) : ?>
    <article class="blog_item">
      <div class="blog_item_img">
        <img class="card-img rounded-0" src="assets/img/blog/<?php echo $post->getImage(); ?>" alt="" />
        <a href="#" class="blog_item_date">
        <h3><?php echo Utils::datify($post->getCreated_at(), 'd'); ?></h3>
        <p><?php echo Utils::datify($post->getCreated_at(), 'M'); ?></p>
        </a>
      </div>

      <div class="blog_details">
        <a class="d-inline-block" href="posts/<?php echo $post->getId(); ?>/<?php echo \Noyau\Classes\Utils::slugify($post->getTitle()); ?>">
          <h2><?php echo $post->getTitle(); ?></h2>
        </a>
        <p><?php echo Utils::tronquer($post->getContent(), 300); ?></p>
        <ul class="blog-info-link">
          <li>
            <a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a>
          </li>
        </ul>
      </div>
    </article>
  <?php endforeach;  ?>
