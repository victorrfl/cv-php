<?php

session_start();

$login = 'toto';
$password = 'tata';




?>


  <form class="form-inline" action="indexadmin.php" method=POST>

<input Type='hiden'  class ="form-control" Name="Login"  placeholder="Login" value=<?=$login?>  required>

<input Type='password' class ="form-control" Name="Password" placeholder="Password" value=<?=$password?> required>

<input Type=submit class ="form-control" Value="SE CONNECTER">
</form>