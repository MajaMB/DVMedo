stranica djelatnici.php

<table>
<?php
foreach($_SERVER as $key => $value){
    echo "<tr><td>" . $key . ":</td><td>" . $value . "</td><tr>";
}
?>
</table>


<?php
$baseDir = dirname($_SERVER['SCRIPT_NAME']);
echo $baseDir;
?>
