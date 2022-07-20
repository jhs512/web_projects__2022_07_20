<meta charset="UTF-8" />
<?php
$articles = [
  ["id" => 3, "title" => "속보 3"],
  ["id" => 2, "title" => "속보 2"],
  ["id" => 1, "title" => "속보 1"],
];
?>
<ul>
  <?php foreach ( $articles as $article ) { ?>
  <li><a href="#"><?=$article["id"]?>. <?=$article["title"]?></a></li>
  <?php } ?>
</ul>
