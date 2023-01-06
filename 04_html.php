<?php
    $nome = 'campo"';
    $nome2 = 'campo" /> <script>alert("teste");</script>';
?>
    <input type="text" name="<?php echo addslashes($nome) ?>"/>
    <input type="text" name="<?php echo htmlentities($nome2) ?>"/>