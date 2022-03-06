<?php
echo '
<form action="checkk.php" method="get">
        <input type="text" name="name"><br>
        <input type="password" name="pass"><br>
        <input type="checkbox" name="subject[]" value="html">English<br>
        <input type="checkbox" name="subject[]" value="css">Math<br>
        <input type="checkbox" name="subject[]" value="js">Arabic<br>
        
        <input type="submit" value="Submit"><br>
    </form>
';
?>