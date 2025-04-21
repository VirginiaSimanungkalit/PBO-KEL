<?php

session_start();

if (!isset($_SESSION["ssLoginPOS"])) {
              header("location: ../auth/login.php");
              exit();
}

require "../config/config.php";
require "../config/fungsion.php";
require "../module/mode-beli.php";

$title = "Transaksi- POSAPP";
require "../template/header.php";
require "../template/navbar.php";
require "../template/sidebar.php";


$noBeli = generateNo();

?>


<?php

require "../template/footer.php";



?>

