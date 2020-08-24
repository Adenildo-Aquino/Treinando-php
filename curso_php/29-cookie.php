<?php
// COOKIE
setcookie('user', 'Adenildo Aquino', time() +3600);
setcookie('email', 'nil.aquino@gmail.com', time()+3600);
setcookie('ultima-pequisa', 'tenis adidas', time()+3600);

var_dump($_COOKIE);