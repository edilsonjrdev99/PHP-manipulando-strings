<?php

// Segurança e HTML
echo '--- Segurança e HTML ---' . PHP_EOL;

$name = 'nome"/> <script>alert("executei um script"); </script>';
$scapeName = addslashes($name);
$htmlScapeName = htmlentities($name);
?>

<input type="text" name="<?php echo $name; ?>"/>
<input type="text" name="<?php echo $scapeName; ?>"/>
<input type="text" name="<?php echo $htmlScapeName; ?>"/>
