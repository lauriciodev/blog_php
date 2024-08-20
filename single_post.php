<?php
include_once("template/cabecalho.php");
include_once("data/posts.php");

if(isset($_GET["id"])){  
  $post_id = $_GET['id'];


$current_post;
$aleatory_post = [];

foreach($posts as $post){
  if($post['id'] != $post_id){
    array_push($aleatory_post,$post);
  }
}

foreach($posts as $post){
  if($post['id'] == $post_id){
    $current_post = $post;
  }
}
}

?>

<main id="post_main">
<div class="posts_container">
<img class="single_post_img" src="<?= $BASE_URL?>img/posts/<?= $current_post["img"]?>">
<h2><?= $current_post["description"]?></h2>
<p> <?= $current_post["content"] ?></p>
</div>
<div class="aleatory_posts_container">
<?php

$side_posts = array_slice($aleatory_post,count($aleatory_post) - 3, count($aleatory_post));
foreach($side_posts as $aleatory): ?>

 <img src="<?= $BASE_URL ?>/img/posts/<?= $aleatory["img"]?>"/>
 <a href="<?= $BASE_URL ?>single_post.php?id=<?= $aleatory["id"]?>" style="font-size:0.8rem;"><?= $aleatory['description']?></a>
<?php endforeach; ?>    
    </div>
</main>

<?php  include_once("template/footer.php");
?>
