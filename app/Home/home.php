<?php
session_start();

if (!isset($_SESSION['idusuario'])) {
    header("Location: ../../index.php");
    die();
}
?>
<div>
    Hola mundo
</div>