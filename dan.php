<?php
$dan = $_GET['dan'];
$limit = $_GET['limit'];
?>

<?php for ( $i = 1; $i <= $limit; $i++ ) { ?>
<div><?=$dan?> * <?=$i?> = <?=$dan * $i?></div>
<?php } ?>