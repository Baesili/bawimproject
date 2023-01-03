<?php
$name=$_GET['Name'];
$print_text = "echo '".$name." - Twoja wiadomość została przekazana<br><br>';";
eval($print_text);
?>