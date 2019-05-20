<?php 
setcookie('name', 'John', time() + 3600); 

echo $_COOKIE['name'];

echo '<pre>' . print_r($_COOKIE, true) . '</pre>';

?>