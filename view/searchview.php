<?php
ob_start();

echo "<h1>Orsingu tulemused</h1>";
echo "<h2><b>".$_GET['otsi'].":</b></h2>";

ViewNews::AllNews($arr);
$content = ob_get_clean();
include_once 'view/layout.php';

?>