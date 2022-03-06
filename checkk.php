<?php
$userChoose = $_GET['subject'];

foreach($userChoose as $user){
    echo '<br>'. $user.'<br>';
}
?>