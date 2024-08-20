<?php
  include_once("template/cabecalho.php");
  include_once("data/posts.php");
  include_once("data/categories.php");
?>

<main>
  <div class="title_container">
    <p>O seu Blog de Tecnologia</p>
 </div>

<div class="post_container">
<?php
  foreach($posts as $post):
?>
<div class="post"> 
<img class="post_img" src="<?= $BASE_URL?>/img/posts/<?= $post["img"]?>"/>
   <p><?= $post["description"] ?></p>
<div class="tags_container">
<?php foreach($post["tags"] as $tag): ?>
 <a href="<?= $BASE_URL . $tag ?>"><?= $tag ?></a>
<?php
    endforeach;
?>
</div>
<a class="btn" href="<?= $BASE_URL ?>single_post.php?id=<?= $post["id"]?>">Ver Post</a>
</div>
<?php
endforeach;
?>
</div>
</main>

<?php
  include_once("template/footer.php");
?>
