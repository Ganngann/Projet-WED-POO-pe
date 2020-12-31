<?php
/*
    ./app/vues/posts/index.php
    Liste des posts
    Variables disponibles:
      - $posts: ARRAY(OBJ Post(id, title, content, image))
  */

use \Noyau\Classes\Template;
use \Noyau\Classes\Utils;
?>

<?php
Template::setZone('title', 'Wedding | Template');
?>


<?php Template::startZone(); ?>

<div class="blog_left_sidebar">

  <div id="blog">
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
  </div>

  <nav class="blog-pagination justify-content-center d-flex">
    <ul class="pagination">
      <li class="page-item">
        <a id="morePosts" href="#" class="page-link" style="width: auto; padding: 0 1em">More posts</a>
      </li>
    </ul>
  </nav>
</div>

<script>

const lien1  = document.getElementById('morePosts');
const div1   = document.getElementById('blog');

lien1.onclick = function() {

   fetch('index.php')
   .then(function(reponseServeur){
      return reponseServeur.text();
   })
   .then(function(code){
      div1.innerHTML = code;
   });


}

</script>

<?php
Template::stopZone('content1');
//  var_dump( Template::getZone('content1')); die;

Template::setZone('zoneScripts', '<script src="js/posts/index.js"></script>');

?>

