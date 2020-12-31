<?php
/*
    ./app/vues/posts/index.php
    Liste des posts
    Variables disponibles:
      - $posts: ARRAY(OBJ Post(id, title, content, image))
  */

use \Noyau\Classes\Template;
?>

<?php
Template::setZone('title', 'Wedding | Template');
?>



<?php Template::startZone(); ?>



<div class="blog_left_sidebar">

  <div id="blog">
  <?php include_once '../app/vues/posts/liste.php'; ?>
  </div>

  <nav class="blog-pagination justify-content-center d-flex">
    <ul class="pagination">
      <li class="page-item">
        <a id="morePosts" href="#" class="page-link" style="width: auto; padding: 0 1em">More posts</a>
      </li>
    </ul>
  </nav>
</div>



<?php
Template::stopZone('content1');
//  var_dump( Template::getZone('content1')); die;

Template::setZone('zoneScripts', '<script src="assets/js/posts/index.js"></script>');

?>

