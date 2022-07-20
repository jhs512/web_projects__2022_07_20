<meta charset="UTF-8" />
<?php
$db = mysqli_connect("localhost", "sbsst", "sbs123414", "site44");

$sql = "
SELECT *
FROM article
";
$rs = mysqli_query($db, $sql);

$articles = [];

while ( $row = mysqli_fetch_assoc($rs) ) {
  $articles[] = $row;
}
?>
<ul>
  <?php foreach ( $articles as $article ) { ?>
  <li><a href="#"><?=$article["id"]?>. <?=$article["title"]?></a></li>
  <?php } ?>
</ul>
