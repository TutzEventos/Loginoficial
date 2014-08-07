<?php
session_start();
$pagina = $_GET['p'];
session_destroy();

echo '<script>
    location.href="'.$pagina.'"
</script>';
