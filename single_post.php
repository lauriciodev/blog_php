<?php
include_once("template/cabecalho.php");
include_once("data/posts.php");

if(isset($_GET["id"])){  
  $post_id = $_GET['id'];


$current_post;

foreach($posts as $post){
  if($post['id'] == $post_id){
    $current_post = $post;
  }
}
}

?>

<main id="post_main">
<img class="single_post_img" src="<?= $BASE_URL?>img/posts/<?= $current_post["img"]?>">
<h2><?= $current_post["description"]?></h2>
<p> <?= $current_post["content"] ?></p>
</main>

<?php
  include_once("template/footer.php");
?>
