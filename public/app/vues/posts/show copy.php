<?php

/*
    ./app/vues/posts/show.php
    Détail d'un post
    Variables disponibles:
      - $post: ARRAY(OBJ Post(id, title, content, image))
  */

?>

<div class="single-post">
  <div class="feature-img">
    <img class="img-fluid" src="assets/img/blog/<?php echo $post->getImage(); ?>" alt="">
  </div>
  <div class="blog_details">
    <h2><?php echo $post->getTitle(); ?></h2>
    <p><?php echo $post->getContent(); ?></p>
  </div>
</div>

<div class="blog-author">
  <div class="media align-items-center">
    <img src="assets/img/blog/author.png" alt="">
    <div class="media-body">
      <a href="#">
        <h4>Harvard milan</h4>
      </a>
      <p>Second divided from form fish beast made. Every of seas all gathered use saying you're, he
        our dominion twon Second divided from</p>
    </div>
  </div>
</div>