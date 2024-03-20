<?php
session_start();
if(isset($_REQUEST['bt']))
{
    session_unset();
    session_destroy();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="submit" name="bt" value="logout">

    </form>
    
</body>
</html>