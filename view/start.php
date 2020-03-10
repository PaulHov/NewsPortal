<?php
ob_start();
?>
<h1>TOP 3 NEWS </h1> <!-- вид стратовой страницы -->
<br>
<?php
ViewNews::NewsByCategory($arr);

$content = ob_get_clean(); // собирает контент страницы
include_once 'view/layout.php';

?>